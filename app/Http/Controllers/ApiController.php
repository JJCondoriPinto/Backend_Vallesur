<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Articulo;
use App\Models\Checkin;
use App\Models\Checkout;
use App\Models\Habitacion;
use App\Models\Reserva;
use App\Models\Huesped;
use App\Models\Servicio;

class ApiController extends Controller
{

    public function listHabitaciones(Request $req)
    {
        $query = Habitacion::query();

        if ($req->has("tipo")) {
            $query->where("tipo_habitacion", $req->input("tipo"));
        }

        if ($req->has("precio")) {
            $precio = $req->input("precio");
            if ($precio == "barato") {
                $query->whereBetween("precio", [0, 100]);
            } elseif ($precio == "medio") {
                $query->whereBetween("precio", [101, 150]);
            } elseif ($precio == "caro") {
                $query->whereBetween("precio", [151, 250]);
            }
        }

        if ($req->has("features")) {
            $features = $req->input("features");
            if ($features == "tele") {
                $query->where("caracteristicas", "Tele");
            } elseif ($features == "baño") {
                $query->where("caracteristicas", "baño");
            }
        }
        if ($req->has("order")) {
            $ordenamiento = $req->input("order");
            $direccion = $req->has("by") ? $req->input("by") : "asc";

            $query->orderBy($ordenamiento, $direccion);
        }


        $habitaciones = $query->get();

        if ($habitaciones->isNotEmpty()) {
            $cantidad = $habitaciones->count();
            return response()->json([
                "status" => 200,
                "message" => "Se encontraron $cantidad habitaciones",
                "data" => $habitaciones,
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No hay Habitaciones",
                "data" => [],
            ], 400);
        }
    }
    public function getUser(Request $req)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            return response()->json([
                "status" => 200,
                "message" => "Bienvenido",
                "data" => $user
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "Error",
                "data" => []
            ], 400);
        }
    }
    public function getHuesped(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "tipo" => "required|string|in:dni,id,extranjero",
            "id" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Parametro incorrecto",
                'error' => $validator->errors(),
            ], 400);
        }
        if ($req->tipo == "dni") {
            $id = $req->id;
            $huesped = Huesped::where('identificacion.identificacion_huesped', $id)
                ->where('identificacion.tipo_identificacion', 'DNI')
                ->first();

            if ($huesped) {
                return response()->json([
                    "status" => 200,
                    "message" => "Se encontro 1 huesped",
                    "data" => $huesped
                ]);
            } else {
                return response()->json([
                    "status" => 400,
                    "message" => "No se encontraron huespedes con el id: $id",
                    "data" => []
                ], 400);
            }
        } else if ($req->tipo == "extranjero") {
            $id = $req->id;
            $huesped = Huesped::where('identificacion.identificacion_huesped', $id)
                ->where('identificacion.tipo_identificacion', 'Identificacion Extranjera')
                ->first();

            if ($huesped) {
                return response()->json([
                    "status" => 200,
                    "message" => "Se encontro 1 huesped",
                    "data" => $huesped
                ]);
            } else {
                return response()->json([
                    "status" => 400,
                    "message" => "No se encontraron huespedes con el id: $id",
                    "data" => []
                ], 400);
            }
        } else {
            $id = $req->id;
            $huesped = Huesped::find($id);
            if ($huesped) {
                return response()->json([
                    "status" => 200,
                    "message" => "Se encontro 1 huesped",
                    "data" => $huesped
                ]);
            } else {
                return response()->json([
                    "status" => 400,
                    "message" => "No se encontraron huespedes con el id: $id",
                    "data" => []
                ], 400);
            }
        }
    }
    public function createHuesped(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "nombre_huesped" => "required|string|max:255",
            "apellido_huesped" => "required|string|max:255",
            "tipo_identificacion_huesped" => "required|string|in:Dni,Carnet Extranjeria",
            "identificacion_huesped" => "required|integer",
            "sexo_huesped" => "required|string|in:Masculino,Femenino",
            "fecha_nacimiento_huesped" => "required|date_format:Y-m-d",
            "nacionalidad_huesped" => "required|string",
            "region_huesped" => "required|string",
            "direccion_huesped" => "required|string",
            "telefono_huesped" => "required|integer",
            "correo_huesped" => "required|string|email|max:255|unique:users",
            "nombre_empresa" => "max:255",
            "ruc_empresa" => "max:255",
            "razon_social" => "max:255",
            "direccion_empresa" => "max:255",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Revisa tus datos",
                'error' => $validator->errors(),
            ], 400);
        }
        $huesped = Huesped::create([
            "identificacion" => array(
                "tipo_identificacion" => $req->input("tipo_identificacion_huesped"),
                "identificacion_huesped" => $req->input("identificacion_huesped")
            ),
            "nombres" => $req->input("nombre_huesped"),
            "apellidos" => $req->input("apellido_huesped"),
            "sexo" => $req->input("sexo_huesped"),
            "fecha_nacimiento" => $req->input("fecha_nacimiento_huesped"),
            "nacionalidad" => $req->input("nacionalidad_huesped"),
            "region" => $req->input("region_huesped"),
            "direccion" => $req->input("direccion_huesped"),
            "telefono" => $req->input("telefono_huesped"),
            "correo" => $req->input("correo_huesped"),
            "empresa" => array(
                "nombre_empresa" => $req->input("nombre_empresa"),
                "ruc_empresa" => $req->input("ruc_empresa"),
                "razon_social" => $req->input("razon_social_empresa"),
                "direccion_empresa" => $req->input("direccion_empresa")
            )
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Huesped registrado con exito',
            'data' => $huesped
        ], 200);
    }
    public function listaHabitacionesTop(Request $req){
        $habitaciones = Habitacion::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$tipo_habitacion',
                        'doc' => ['$first' => '$$ROOT']
                    ]
                ],
                [
                    '$replaceRoot' => [
                        'newRoot' => '$doc'
                    ]
                ]
            ]);
        });




        if($habitaciones){
            return response()->json([
                "status"=>200,
                "message"=>"Se encontraron habitaciones",
                "data"=>$habitaciones
            ],200);
        }else{
            return response()->json([
                "status"=>400,
                "message"=>"No se encontraron habitaciones",
            ],400);
        }

    }
    public function listaReservaFromOne(Request $req,$id){
        $reservas = Reserva::where("id_huesped",$id)->with("huesped")->with("habitacion")->get();
        if($reservas->isEmpty()){
            return response()->json([
                "status"=>400,
                "message"=>"No se encontraron reservas",
            ],400);
        }
        return response()->json([
            "status"=>200,
            "message"=>"Se encontraron reservas",
            "data"=>$reservas
        ]);
    }
    public function actualizarHuespedes(Request $req, $id)
    {
        // Validación de los datos de entrada
        $validator = Validator::make($req->all(), [
            "nombre_huesped" => "required|string|max:255",
            "apellido_huesped" => "required|string|max:255",
            "tipo_identificacion_huesped" => "required|string|in:DNI,Identificacion Extranjera",
            "identificacion_huesped" => "required|integer",
            "sexo_huesped" => "required|string|in:masculino,femenino",
            "fecha_nacimiento_huesped" => "required|date_format:Y-m-d",
            "nacionalidad_huesped" => "required|string",
            "region_huesped" => "required|string",
            "direccion_huesped" => "required|string",
            "telefono_huesped" => "required|integer",
            "correo_huesped" => "required|string|email|max:255|unique:users",
            "nombre_empresa" => "max:255",
            "ruc_empresa" => "max:255",
            "razon_social_empresa" => "max:255",
            "direccion_empresa" => "max:255",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Revisa tus datos",
                'error' => $validator->errors(),
            ], 400);
        }

        $huesped = Huesped::find($id);

        if (!$huesped) {
            return response()->json([
                'status' => 404,
                'message' => 'Huesped no encontrado',
            ], 404);
        }

        $huesped->update([
            "identificacion" => [
                "tipo_identificacion" => $req->input("tipo_identificacion_huesped"),
                "identificacion_huesped" => $req->input("identificacion_huesped")
            ],
            "nombres" => $req->input("nombre_huesped"),
            "apellidos" => $req->input("apellido_huesped"),
            "sexo" => $req->input("sexo_huesped"),
            "fecha_nacimiento" => $req->input("fecha_nacimiento_huesped"),
            "nacionalidad" => $req->input("nacionalidad_huesped"),
            "region" => $req->input("region_huesped"),
            "direccion" => $req->input("direccion_huesped"),
            "telefono" => $req->input("telefono_huesped"),
            "correo" => $req->input("correo_huesped"),
            "empresa" => [
                "nombre_empresa" => $req->input("nombre_empresa"),
                "ruc_empresa" => $req->input("ruc_empresa"),
                "razon_social" => $req->input("razon_social_empresa"),
                "direccion_empresa" => $req->input("direccion_empresa")
            ]
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Datos del huésped actualizados con éxito',
            'data' => $huesped
        ], 200);
    }
    public function listarHuespedes()
    {
        $huespedes = Huesped::all();
        if ($huespedes) {
            $cantidad = $huespedes->count();
            return response()->json([
                "status" => 200,
                "message" => "Se han encontrado $cantidad huespedes",
                "data" => $huespedes
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No se han encontrado huespedes"
            ], 400);
        }
    }
    public function deleteRecepcionista(Request $req)
    {
        $id = $req->id;

        $deleted = Administrador::destroy($id);

        if ($deleted) {
            return response()->json([
                'status' => 200,
                'message' => 'Recepcionista eliminado correctamente',
            ], 200);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Recepcionista no encontrado',
            ], 400);
        }
    }
    public function listRecepcionistas(Request $req)
    {
        $administradores = Administrador::where('rol', 'admin')->get();
        if ($administradores) {
            $cantidad = $administradores->count();
            return response()->json([
                "status" => 200,
                "message" => "Se han encontrado $cantidad recepcionistas",
                "data" => $administradores
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No se han encontrado recepcionistas",
                "data" => []
            ], 400);
        }
    }
    public function servicios_mas_consumidos ()
    {
        $result = Servicio::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$tipo',
                        'costoPromedio' => ['$avg' => '$costo']
                    ]
                ]
            ]);
    });

    $data = [];
    foreach($result as $row){
        $data[] = [
            'tipo' => $row->_id,
            "costoPromedio" => $row->costoPromedio
        ];
    }
    return response()->json($data);
    }


    public function administrador_por_turno()
    {
        $result = User::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$turno',
                        'count' => ['$sum' => 1]
                    ]
                ]
            ]);
        });

        $data = [];

        foreach ($result as $row) {
            $data[] = [
                'turno' => $row->_id,
                'count' => $row->count
            ];
        }

        return response()->json($data);
    }

public function huesped_por_nacionalidad()
{
    $result = Huesped::raw(function ($collection) {
        return $collection->aggregate([
            [
                '$group' => [
                    '_id' => '$nacionalidad',
                    'count' => ['$sum' => 1]
                ]
            ]
        ]);
    });

    $data = [];

    foreach ($result as $row) {
        $data[] = [
            'nacionalidad' => $row->_id,
            'count' => $row->count
        ];
    }

    return response()->json($data);
}

public function graficar_barras()
{
    $datos = Articulo::all();

    $json = json_encode($datos, JSON_UNESCAPED_UNICODE);

    if (!empty($datos)){
        return response()->json([
            'status'=> 200,
            'message' => 'Datos compilados correctamente',
            'data' => $datos,
        ]);
    }
    else{
        return response()->json([
            'status'=> 400,
            'message' => 'Datos no encontrados',
            'data' => [],
        ],400);
    }
}



public function checkins_por_año()
    {
        $result = Checkin::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => ['$year' => '$fecha_ingreso'],
                        'count' => ['$sum' => 1]
                    ]
                ],
                [
                    '$sort' => ['_id' => 1]
                ]
            ]);
        });

        $data = [];

        foreach ($result as $row) {
            $data[] = [
                'año' => $row->_id,
                'count' => $row->count
            ];
        }

        return response()->json($data);
    }

    public function listReservas(Request $req)
    {
        $query = Reserva::query();

        //$reservas = Reserva::all();

        if ($req->has("id")) {
            $query->where("_id", $req->input("id"));
        }
        $reservas = $query->with('huesped')->with("habitacion")->get();

        if ($reservas->isNotEmpty()) {
            $cantidad = $reservas->count();
            return response()->json([
                "status" => 200,
                "message" => "Se encontraron $cantidad reservas",
                "data" => $reservas,
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No hay Reservas",
                "data" => [],
            ], 400);
        }
    }
    public function storeReservas(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [

            "id_huesped" => "required|string|unique:users",
            "fecha_reserva" => "required|date_format:d-m-Y H:i",
            "cantidad_dias_reserva" => "required|integer",
            "pax_reserva" => "required|integer",
            "id_habitacion_reserva" => "required|string",
            "tipo_reserva"=>"required|string",
            "razon_hospedaje"=>"required|string",
            "destinatario_reserva"=>"required|string",
            "hora_llegada"=>"required|string",
            "fecha_checkin"=>"required|string",
            "fecha_checkout"=>"required|string",

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors(),
            ], 400);
        }


        $dataReserva = [
            "fecha_reserva" => $request->fecha_reserva,
            "cantidad_dias_reserva" => $request->cantidad_dias_reserva,
            "pax_reserva" => $request->pax_reserva,
            "tipo_reserva"=>$request->tipo_reserva,
            "razon_hospedaje"=>$request->razon_hospedaje,
            "destinatario_reserva"=>$request->destinatario_reserva,
            "peticiones_adicionales"=>$request->peticiones_adicionales,
            "hora_llegada"=>$request->hora_llegada,
            "fecha_checkin"=>$request->fecha_checkin,
            "fecha_checkout"=>$request->fecha_checkout

        ];
        $reserva = Reserva::create([
            "id_huesped" => $request->id_huesped,
            "datosReserva" => $dataReserva,
            "id_habitacion" => $request->id_habitacion_reserva,
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Reserva realizada con exito',
        ], 200);
    }

    public function listCheckOut()
    {
        $checksOut = Checkout::all();
        if ($checksOut) {
            $cantidad = $checksOut->count();
            return response()->json([
                "status" => 400,
                "message" => "Se encontraron $cantidad check outs",
                "data" => $checksOut
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No hay Check Outs",
                "data" => [],
            ]);
        }
    }
    public function storeCheckOut(Request $request)
    {
        //
        //dd($request);
        $validator = Validator::make($request->all(), [
            "id_checkin" => "required|string",
            "id_recepcionista" => "required|string",
            "forma_pago" => "required|string",
            "estado_pago" => "required|string",
            "descripcion_salida" => "required|string",
            "fecha_salida" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => 400,
                "message" => "No se pudo guardar el check out",
                "error" => $validator->errors()
            ], 400);
        }
        $checkin = Checkin::find($request->input("id_checkin"))->first();

        if ($checkin) {
            $checkin->estado = "pasado";
            $checkin->save();
        }

        $checkout = Checkout::create([
            "id_checkin" => $request->input("id_checkin"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "forma_pago" => $request->input("forma_pago"),
            "estado_pago" => $request->input("estado_pago"),
            "descripcion_salida" => $request->input("descripcion_salida"),
            "fecha_salida" => $request->input("fecha_salida"),
        ]);
        //return redirect()->route("administrador/check");
        return response()->json([
            "status" => 200,
            "message" => "Check Out realizado correctamente"
        ]);
        //dd($request);

    }
    public function storeCheckIn(Request $request)
    {
        //
        //dd($request);
        $validator = Validator::make($request->all(), [
            "id_huesped" => "required|integer|unique:users",
            "nro_habitacion" => "required|integer",
            "id_recepcionista" => "required|string",
            "tipo_reserva" => "required|string",
            "paxs" => "required|integer",
            "cantidad_dias" => "required|integer",
            "motivo_viaje" => "required|string",
            "fecha_ingreso" => "required|date",
            "nota_adicionales" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => 400,
                "message" => "No se pudo guardar el check in",
                "error" => $validator->errors()
            ], 400);
        }
        $checkin = Checkin::create([
            "id_huesped" => $request->input("id_huesped"),
            "nro_habitacion" => $request->input("nro_habitacion"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "tipo_reserva" => $request->input("tipo_reserva"),
            "paxs" => $request->input("paxs"),
            "cantidad_dias" => $request->input("cantidad_dias"),
            "motivo_viaje" => $request->input("motivo_viaje"),
            "fecha_ingreso" => $request->input("fecha_ingreso"),
            "nota_adicionales" => $request->input("nota_adicionales"),
            "estado" => "active"
        ]);
        /* return redirect()->route("administrador/check"); */

        return response()->json([
            "status" => 200,
            "message" => "Check In realizado correctamente"
        ]);
    }
    public function listCheckIn()
    {
        //
        $checksIn = Checkin::all();
        if ($checksIn) {
            $cantidad = $checksIn->count();
            return response()->json([
                "status" => 400,
                "message" => "Se encontraron $cantidad check in",
                "data" => $checksIn
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No se encontraron Check In",
                "data" => [],
            ], 400);
        }
    }
}

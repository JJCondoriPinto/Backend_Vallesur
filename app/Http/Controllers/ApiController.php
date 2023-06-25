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
    public function servicios_mas_consumidos ()
    {
        $result = Servicio::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$tipo',
                        'count' => ['$sum' => 1]
                    ]
                ]
            ]);
    });

    $data = [];
    foreach($result as $row){
        $data[] = [
            'tipo' => $row->_id,
            "count" => $row->count
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
        $reservas = Reserva::all();
        if ($reservas) {
            return response()->json([
                "status" => 400,
                "message" => "No hay reservas",
                "data" => [],
            ], 400);
        } else {
            $cantidad = $reservas->count();
            return response()->json([
                "status" => 200,
                "message" => "Se encontraron $cantidad reservas",
                "data" => $reservas,
            ]);
        }
    }
    public function storeReservas(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            "nombre_huesped" => "required|string|max:255",
            "apellido_huesped" => "required|string|max:255",
            "tipo_identificacion_huesped" => "required|string|in:dni,carnet extranjeria",
            "identificacion_huesped" => "required|integer",
            "sexo_huesped" => "required|string|in:hombre,mujer",
            "fecha_nacimiento_huesped" => "required|date_format:d-m-Y",
            "nacionalidad_huesped" => "required|string",
            "region_huesped" => "required|string",
            "direccion_huesped" => "required|string",
            "telefono_huesped" => "required|integer",
            "correo_huesped" => "required|string|email|max:255|unique:users",
            "ruc_empresa" => "integer",
            "razon_social_empresa" => "string",
            "direccion_empresa" => "string",
            "fecha_reserva" => "required|required|date_format:d-m-Y H:i",
            "cantidad_dias_reserva" => "required|integer",
            "pax_reserva" => "required|integer",
            "nro_habitacion_reserva" => "required|integer",
            "tipo_habitacion_reserva" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors(),
            ], 400);
        }
        $dataIdentificacion = [
            "tipo_identificacion" => $request->tipo_identificacion_huesped,
            "identificacion_huesped" => $request->identificacion_huesped
        ];
        $dataEmpresa = [
            "ruc_empresa" => $request->ruc_empresa,
            "razon_social_empresa" => $request->razon_social_empresa,
            "direccion_empresa" => $request->direccion_empresa,
        ];
        $dataHuesped = [
            "nombre_huesped" => $request->nombre_huesped,
            "apellido_huesped" => $request->apellido_huesped,
            "identificacion" => $dataIdentificacion,
            "sexo" => $request->sexo_huesped,
            "fecha_nacimiento" => $request->fecha_nacimiento_huesped,
            "nacionalidad_huesped" => $request->nacionalidad_huesped,
            "region_huesped" => $request->region_huesped,
            "direccion_huesped" => $request->direccion_huesped,
            "telefono_huesped" => $request->telefono_huesped,
            "correo_huesped" => $request->correo_huesped,
            "empresa" => $dataEmpresa
        ];
        $dataHabitacion = [
            "nro_habitacion_reserva" => $request->nro_habitacion_reserva,
            "tipo_habitacion_reserva" => $request->tipo_habitacion_reserva,
        ];

        $dataReserva = [
            "fecha_reserva" => $request->fecha_reserva,
            "cantidad_dias_reserva" => $request->cantidad_dias_reserva,
            "pax_reserva" => $request->pax_reserva,
            "habitacion" => $dataHabitacion
        ];
        $data = [
            "datosHuesped" => $dataHuesped,
            "datosReserva" => $dataReserva
        ];
        $reserva = new Reserva;
        $reserva->datosHuesped = $data["datosHuesped"];
        $reserva->datosReserva = $data["datosReserva"];
        $reserva->save();
        return response()->json([
            'status' => 200,
            'message' => 'Reserva realizada con exito',
        ], 200);
    }

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

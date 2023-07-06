<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Habitacion;

class ReservasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $reservas = Reserva::all();

        return response()->json([
            "data" => $reservas,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $reserva = Reserva::find($request->id);

        if ($reserva) {

            return response()->json([
                "message" => "Reserva encontrada",
                "data" => $reserva,
            ], 200);

        } else {

            return response()->json([
                "message" => "Reserva no encontrada",
            ], 404);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $reserva = Reserva::find($request -> id);

        if ($reserva) {

            $reserva -> destroy();

            return response()->json([
                "message" => "Reserva eliminada"
            ], 200);

        } else {

            return response()->json([
                "message" => "Reserva no encontrada"
            ], 404);

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $reserva = Reserva::find($request -> id);

        if($reserva) {

            $reserva = Reserva::update([
                "id_huesped" => $request->input("id_huesped"),
                "id_habitacion" => $request->input("id_habitacion"),
                "datosReserva" => $request->input("datosReserva"),
                "estado" => $request->input("estado"),
            ]);

            return response()->json([
                "message" => "Reserva actualizada correctamente"
            ], 200);

        } else {

            return response()->json([
                "message" => "Reserva no encontrada"
            ], 404);

        }
    }

    /**
     *  |----------------|
     *  |Metodos variados|
     *  |----------------|
     */

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listReservas(Request $request)
    {
        $query = Reserva::query();

        if ($request->has("id")) {
            $query->where("_id", $request->input("id"));
        }

        $reservas = $query->with('huesped')->with("habitacion")->get();

        if ($reservas->isNotEmpty()) {
            $cantidad = $reservas->count();
            return response()->json([
                "message" => "Se encontraron $cantidad reservas",
                "data" => $reservas,
            ], 200);
        } else {
            return response()->json([
                "message" => "No hay Reservas",
                "data" => [],
            ], 404);
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function listaReservaFromOne(Request $request, $id)
    {
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

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReserva(Request $request)
    {
        $validator = Validator::make($request->all(), [

            "id_huesped" => "required|string|unique:users",
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
                'message' => $validator->errors(),
            ], 400);
        }


        $dataReserva = [
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
            "estado" => 'Pendiente'
        ]);

        // Estado de habitación
        $habitacion = Habitacion::find($request->id_habitacion_reserva);
        $habitacion->estado = 'Reservado';
        $habitacion->save();

        return response()->json([
            'message' => 'Reserva realizada con exito',
        ], 200);
    }
}

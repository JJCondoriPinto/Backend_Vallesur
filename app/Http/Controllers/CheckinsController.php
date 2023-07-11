<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Habitacion;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display a listing of the resource (custom).
     *
     * @return \Illuminate\Http\Response
     */
    public function listCheckIn()
    {
        // 
        $query = Checkin::query();
        $checksIn = $query->with("recepcionista")->with("reserva")->with("reserva.huesped")->with("reserva.habitacion")->get();
        if ($checksIn) {
            $cantidad = $checksIn->count();
            return response()->json([
                "status" => 200,
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCheckIn(Request $request)
    {
        //
        //dd($request);
        $validator = Validator::make($request->all(), [
            "id_reserva" => "required|string",
            "id_recepcionista" => "required|string",
            "paxs" => "required|array",
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
        Reserva::find($request->input("id_reserva"))->update(['estado' => 'Completo']);
        $checkin = Checkin::create([
            "id_reserva" => $request->input("id_reserva"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "paxs" => $request->input("paxs"),
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
    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $checkin = Checkin::with('reserva')->with('reserva.huesped')->with('reserva.habitacion')->with('recepcionista')->find($id);

        if ($checkin) {

            return response()->json([
                "message" => "Checkin encontrado",
                "data" => $checkin,
            ], 200);
        } else {

            return response()->json([
                "message" => "Checkin no encontrado",
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $checkin = Checkin::find($id);

        if ($checkin) {

            $id_reserva = $checkin->id_reserva;
            $reserva = Reserva::find($id_reserva);


            $reserva->datosReserva = array_merge($reserva->datosReserva, [
                'fecha_checkout' => $request->input('fecha_checkout') ?? $reserva->datosReserva['fecha_checkout']
            ]);

            $reserva->save();

            return response()->json([
                "message" => "Checkin actualizado correctamente",
                "data" => $reserva
            ], 200);
        } else {

            return response()->json([
                "message" => "Checkin no encontrado"
            ], 404);
        }

        /*         $checkin = Checkin::update([
            "id_huesped" => $request->input("id_huesped"),
            "nro_habitacion" => $request->input("nro_habitacion"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "tipo_reserva" => $request->input("tipo_reserva"),
            "paxs" => $request->input("paxs"),
            "cantidad_dias" => $request->input("cantidad_dias"),
            "motivo_viaje" => $request->input("motivo_viaje"),
            "fecha_ingreso" => $request->input("fecha_ingreso"),
            "nota_adicionales" => $request->input("nota_adicionales"),
            "estado" => $request->input("estado"),
        ]); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $checkin = Checkin::find($request->id);

        if ($checkin) {

            $habitacion = Habitacion::where('nro_habitacion', $checkin->nro_habitacion)->get();
            $habitacion->estado = "Reservado";
            $habitacion->save();

            $checkin->destroy();

            return response()->json([
                "message" => "Checkin eliminado"
            ], 200);
        } else {

            return response()->json([
                "message" => "Checkin no encontrado"
            ], 404);
        }
    }
}

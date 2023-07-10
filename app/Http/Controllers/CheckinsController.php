<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Habitacion;
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
    public function index(Request $request)
    {

        $checkins = Checkin::all();

        return response()->json([
            "data" => $checkins,
        ], 200);

    }

    /**
     * Display a listing of the resource (custom).
     *
     * @return \Illuminate\Http\Response
     */
    public function listCheckIn()
    {
        $checksIn = Checkin::all();
        if ($checksIn) {
            $cantidad = $checksIn->count();
            return response()->json([
                "message" => "Se encontraron $cantidad check in",
                "data" => $checksIn
            ], 200);
        } else {
            return response()->json([
                "message" => "No se encontraron Check In",
                "data" => [],
            ], 404);
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
        $validator = Validator::make($request->all(), [
            "id_huesped" => "required|integer|unique:users",
            "nro_habitacion" => "required|integer",
            "id_recepcionista" => "required|string",
            "tipo_reserva" => "required|string",
            "paxs" => "required|array",
            "cantidad_dias" => "required|integer",
            "motivo_viaje" => "required|string",
            "fecha_ingreso" => "required|date",
            "nota_adicionales" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "message" => "No se pudo guardar el checkin",
                "error" => $validator->errors()
            ], 409);
        }

        Checkin::create([
            "id_huesped" => $request->input("id_huesped"),
            "nro_habitacion" => $request->input("nro_habitacion"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "tipo_reserva" => $request->input("tipo_reserva"),
            "paxs" => $request->input("paxs"),
            "cantidad_dias" => $request->input("cantidad_dias"),
            "motivo_viaje" => $request->input("motivo_viaje"),
            "fecha_ingreso" => $request->input("fecha_ingreso"),
            "nota_adicionales" => $request->input("nota_adicionales"),
            "estado" => "Activo"
        ]);

        $habitacion = Habitacion::where('nro_habitacion', $request->input('nro_habitacion'))->get();
        $habitacion->estado = "Ocupado";
        $habitacion->save();

        return response()->json([
            "message" => "CheckIn realizado correctamente"
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
        $checkin = Checkin::find($request->id);

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
    public function update(Request $request)
    {
        $checkin = Checkin::find($request -> id);

        if($checkin) {

            $checkin = Checkin::update([
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
            ]);

            return response()->json([
                "message" => "Checkin actualizado correctamente"
            ], 200);

        } else {

            return response()->json([
                "message" => "Checkin no encontrado"
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
        $checkin = Checkin::find($request -> id);

        if ($checkin) {

            $habitacion = Habitacion::where('nro_habitacion', $checkin->nro_habitacion)->get();
            $habitacion->estado = "Reservado";
            $habitacion->save();

            $checkin -> destroy();

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

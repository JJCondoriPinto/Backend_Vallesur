<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Checkin;
use App\Models\Habitacion;
use App\Models\Reserva;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listCheckOut()
    {
        $query = Checkout::query();
        $checkOut = $query->with("recepcionista")->with("checkin")->with("checkin.reserva.huesped")->with("checkin.recepcionista")->get();
        if ($checkOut) {
            $cantidad = $checkOut->count();
            return response()->json([
                "status" => 400,
                "message" => "Se encontraron $cantidad check outs",
                "data" => $checkOut
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "No hay Check Outs",
                "data" => [],
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCheckOut(Request $request)
    {
        
         $validator = Validator::make($request->all(), [
            "id_checkin" => "required|string",
            "id_recepcionista" => "required|string",
            "descripcion_salida" => "required|string",
            
        ]);
        if ($validator->fails()) {
            return response()->json([
                "message" => "No se pudo guardar el check out",
                "error" => $validator->errors()
            ], 409);
        } 
        $checkin = Checkin::find($request->input("id_checkin"))->first();
        
        if ($checkin) {
            
            $checkin->estado = "pasado";
            $checkin->save();

            $reserva = Reserva::find($checkin->id_reserva);
            $habitacion = Habitacion::find($reserva->id_habitacion);
            $habitacion->estado = "Libre";
            $habitacion->save(); 
        }


       $checkout = Checkout::create([
            "id_checkin" => $request->input("id_checkin"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "descripcion_salida" => $request->input("descripcion_salida"),
        ]); 

        return response()->json([
            "message" => "CheckOut realizado correctamente",
            "data" => $habitacion
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $checkout = Checkout::with("recepcionista")->with("checkin")->with("checkin.reserva.huesped")->with("checkin.recepcionista")->find($id);

        if ($checkout) {

            return response()->json([
                "message" => "Checkout encontrado",
                "data" => $checkout,
            ], 200);

        } else {

            return response()->json([
                "message" => "Checkout no encontrado",
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
        $checkout = Checkout::find($request -> id);

        if ($checkout) {

            $checkout -> destroy();

            return response()->json([
                "message" => "Checkout eliminado"
            ], 200);

        } else {

            return response()->json([
                "message" => "Checkout no encontrado"
            ], 404);

        }
    }
}

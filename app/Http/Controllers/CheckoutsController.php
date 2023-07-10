<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckoutsController extends Controller
{

    public function index(Request $request)
    {

        $checkouts = Checkout::all();

        return response()->json([
            "data" => $checkouts,
        ], 200);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listCheckOut()
    {
        $checksOut = Checkout::all();
        if ($checksOut) {
            $cantidad = $checksOut->count();
            return response()->json([
                "message" => "Se encontraron $cantidad check outs",
                "data" => $checksOut
            ], 200);
        } else {
            return response()->json([
                "message" => "No hay Check Outs",
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
    public function storeCheckOut(Request $request)
    {

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
                "message" => "No se pudo guardar el check out",
                "error" => $validator->errors()
            ], 409);
        }
        $checkin = Checkin::find($request->input("id_checkin"))->first();

        if ($checkin) {
            $checkin->estado = "Pasado";
            $checkin->save();

            $habitacion = Habitacion::where('nro_habitacion', $checkin->nro_habitacion)->get();
            $habitacion->estado = "Limpieza";
            $habitacion->save();
        }

        $checkout = Checkout::create([
            "id_checkin" => $request->input("id_checkin"),
            "id_recepcionista" => $request->input("id_recepcionista"),
            "forma_pago" => $request->input("forma_pago"),
            "estado_pago" => $request->input("estado_pago"),
            "descripcion_salida" => $request->input("descripcion_salida"),
            "fecha_salida" => $request->input("fecha_salida"),
        ]);

        return response()->json([
            "message" => "CheckOut realizado correctamente"
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
        $checkout = Checkout::find($request->id);

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

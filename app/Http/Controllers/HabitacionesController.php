<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $habitacion = Habitacion::find($request->id);

        if ($habitacion) {
            return response()->json([
                "message" => "Habitacion encontrada",
                "data" => $habitacion,
            ]);
        } else {
            return response()->json([
                "message" => "Habitacion no encontrada",
            ], 400);
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {

        $habitaciones = Habitacion::all();

        return response()->json([
            "data" => $habitaciones
        ], 200);

    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $habitacion = new Habitacion;

        $habitacion -> nro_habitacion = $request -> nro_habitacion;
        $habitacion -> tipo_habitacion = $request -> tipo_habitacion;
        $habitacion -> tamaño = $request -> tamaño;
        $habitacion -> precio = $request -> precio;
        $habitacion -> estado = $request -> estado;
        $habitacion -> caracteristicas = $request -> caracteristicas;

        try {

            $habitacion -> save();

            return response()->json([
                "message" => "Habitacion registrada"
            ], 200);

        } catch (Illuminate\Database\QueryException $err) {

            return response()->json([
                "message" => "No se pudo registrar la habitación"
            ], 409);

        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request)
    {

        $habitacion = Habitacion::find( $request -> id );

        if ($habitacion) {

            $habitacion -> nro_habitacion = $request -> nro_habitacion;
            $habitacion -> tipo_habitacion = $request -> tipo_habitacion;
            $habitacion -> tamaño = $request -> tamaño;
            $habitacion -> precio = $request -> precio;
            $habitacion -> estado = $request -> estado;
            $habitacion -> caracteristicas = $request -> caracteristicas;

            try {

                $habitacion -> save();

                return response()->json([
                    "message" => "Habitacion actualizada"
                ], 200);

            } catch (Illuminate\Database\QueryException $err) {

                return response()->json([
                    "message" => "No se pudo actualizar la habitación"
                ], 409);

            }
        } else {
            return response()->json([
                "message" => "Habitacion no encontrada"
            ], 404);
        }

    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $habitacion = Habitacion::find( $request -> id );

        if ($habitacion) {

            $habitacion -> delete();

            return response()->json([
                "message" => "Habitacion eliminada"
            ], 200);
        } else {
            return response()->json([
                "message" => "Habitacion no encontrada"
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
    public function listHabitaciones(Request $request)
    {
        $query = Habitacion::query();

        if ($request->has("tipo")) {
            $query->where("tipo_habitacion", $request->input("tipo"));
        }

        if ($request->has("precio")) {
            $precio = $request->input("precio");
            if ($precio == "barato") {
                $query->whereBetween("precio", [0, 100]);
            } elseif ($precio == "medio") {
                $query->whereBetween("precio", [101, 150]);
            } elseif ($precio == "caro") {
                $query->whereBetween("precio", [151, 250]);
            }
        }

        if ($request->has("features")) {
            $features = $request->input("features");
            if ($features == "tele") {
                $query->where("caracteristicas", "Tele");
            } elseif ($features == "baño") {
                $query->where("caracteristicas", "baño");
            }
        }
        if ($request->has("order")) {
            $ordenamiento = $request->input("order");
            $direccion = $request->has("by") ? $request->input("by") : "asc";

            $query->orderBy($ordenamiento, $direccion);
        }


        $habitaciones = $query->get();

        if ($habitaciones->isNotEmpty()) {
            $cantidad = $habitaciones->count();
            return response()->json([
                "message" => "Se encontraron $cantidad habitaciones",
                "data" => $habitaciones,
            ], 200);
        } else {
            return response()->json([
                "message" => "No hay Habitaciones",
                "data" => [],
            ], 404);
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listaHabitacionesTop(Request $request)
    {
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
                "message"=>"Se encontraron habitaciones",
                "data"=>$habitaciones
            ],200);
        }else{
            return response()->json([
                "message"=>"No se encontraron habitaciones",
            ],404);
        }

    }

}

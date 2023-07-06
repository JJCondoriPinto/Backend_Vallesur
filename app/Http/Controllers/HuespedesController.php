<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Huesped;
use Illuminate\Support\Facades\Validator;

class HuespedesController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $huesped = Huesped::find( $request -> id );

        if ($huesped) {
            return response()->json([
                "message" => "Huesped encontrado",
                "data" => $huesped,
            ], 200);
        } else {
            return response()->json([
                "message" => "Huesped no encontrado",
            ], 404);
        }

    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $huesped = Huesped::find( $request -> id );

        if ($huesped) {

            $huesped -> delete();

            return response()->json([
                "message" => "Huesped eliminado",
            ], 200);
        } else {
            return response()->json([
                "message" => "Huesped no encontrado",
            ], 404);
        }

    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validación de los datos de entrada
        $validator = Validator::make($request->all(), [
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
                'message' => "Revisa tus datos",
                'error' => $validator->errors(),
            ], 400);
        }

        $huesped = Huesped::find($id);

        if (!$huesped) {
            return response()->json([
                'message' => 'Huesped no encontrado',
            ], 404);
        }

        try {

            $huesped->update([
                "identificacion" => [
                    "tipo_identificacion" => $request->input("tipo_identificacion_huesped"),
                    "identificacion_huesped" => $request->input("identificacion_huesped")
                ],
                "nombres" => $request->input("nombre_huesped"),
                "apellidos" => $request->input("apellido_huesped"),
                "sexo" => $request->input("sexo_huesped"),
                "fecha_nacimiento" => $request->input("fecha_nacimiento_huesped"),
                "nacionalidad" => $request->input("nacionalidad_huesped"),
                "region" => $request->input("region_huesped"),
                "direccion" => $request->input("direccion_huesped"),
                "telefono" => $request->input("telefono_huesped"),
                "correo" => $request->input("correo_huesped"),
                "empresa" => [
                    "nombre_empresa" => $request->input("nombre_empresa"),
                    "ruc_empresa" => $request->input("ruc_empresa"),
                    "razon_social" => $request->input("razon_social_empresa"),
                    "direccion_empresa" => $request->input("direccion_empresa")
                ]
            ]);

            return response()->json([
                'message' => 'Datos del huésped actualizados con éxito',
                'data' => $huesped
            ], 200);

        } catch (Illuminate\Database\QueryException $error) {

            return response()->json([
                "message" => "No se pudo actualizar al huesped"
            ], 409);

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
    public function getHuesped(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "tipo" => "required|string|in:dni,id,extranjero",
            "id" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => "Parametro incorrecto",
                'error' => $validator->errors(),
            ], 400);
        }
        if ($request->tipo == "dni") {
            $id = $request->id;
            $huesped = Huesped::where('identificacion.identificacion_huesped', $id)
                ->where('identificacion.tipo_identificacion', 'Dni')
                ->first();

            if ($huesped) {
                return response()->json([
                    "message" => "Se encontro 1 huesped",
                    "data" => $huesped
                ], 200);
            } else {
                return response()->json([
                    "message" => "No se encontraron huespedes con el id: $id",
                    "data" => []
                ], 404);
            }
        } else if ($request->tipo == "extranjero") {
            $id = $request->id;
            $huesped = Huesped::where('identificacion.identificacion_huesped', $id)
                ->where('identificacion.tipo_identificacion', 'Identificacion Extranjera')
                ->first();

            if ($huesped) {
                return response()->json([
                    "message" => "Se encontro 1 huesped",
                    "data" => $huesped
                ], 200);
            } else {
                return response()->json([
                    "message" => "No se encontraron huespedes con el id: $id",
                    "data" => []
                ], 404);
            }
        } else {
            $id = $request->id;
            $huesped = Huesped::find($id);
            if ($huesped) {
                return response()->json([
                    "message" => "Se encontro 1 huesped",
                    "data" => $huesped
                ], 200);
            } else {
                return response()->json([
                    "message" => "No se encontraron huespedes con el id: $id",
                    "data" => []
                ], 404);
            }
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createHuesped(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
                'message' => "Revisa tus datos",
                'error' => $validator->errors(),
            ], 400);
        }

        try {

            $huesped = Huesped::create([
                "identificacion" => array(
                    "tipo_identificacion" => $request->input("tipo_identificacion_huesped"),
                    "identificacion_huesped" => $request->input("identificacion_huesped")
                ),
                "nombres" => $request->input("nombre_huesped"),
                "apellidos" => $request->input("apellido_huesped"),
                "sexo" => $request->input("sexo_huesped"),
                "fecha_nacimiento" => $request->input("fecha_nacimiento_huesped"),
                "nacionalidad" => $request->input("nacionalidad_huesped"),
                "region" => $request->input("region_huesped"),
                "direccion" => $request->input("direccion_huesped"),
                "telefono" => $request->input("telefono_huesped"),
                "correo" => $request->input("correo_huesped"),
                "empresa" => array(
                    "nombre_empresa" => $request->input("nombre_empresa"),
                    "ruc_empresa" => $request->input("ruc_empresa"),
                    "razon_social" => $request->input("razon_social_empresa"),
                    "direccion_empresa" => $request->input("direccion_empresa")
                )
            ]);

            return response()->json([
                'message' => 'Huesped registrado con exito',
                'data' => $huesped
            ], 200);

        } catch (Illuminate\Database\QueryException $error) {

            return response()->json([
                "message" => "No se pudo registrar al huesped"
            ], 409);

        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listarHuespedes(Request  $request)
    {
        $huespedes = Huesped::all();
        if ($huespedes) {
            $cantidad = $huespedes->count();
            return response()->json([
                "message" => "Se han encontrado $cantidad huespedes",
                "data" => $huespedes
            ], 200);
        } else {
            return response()->json([
                "message" => "No se han encontrado huespedes"
            ], 404);
        }
    }

}

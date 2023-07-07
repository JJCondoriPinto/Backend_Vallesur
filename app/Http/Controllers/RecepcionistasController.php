<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RecepcionistasController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "nombres" => "required|string",
            "apellidos" => "required|string",
            "dni" => "required|integer",
            "telefono" => "required|integer",
            "turno" => "required|string",
            "rol" => "required|string",
            "email" => "required|email",
            "password" => "required|string|min:8",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => "Revisa tus datos",
                "error" => $validator->errors()
            ], 409);
        }

        $recepcionista = new User;

        $recepcionista -> nombres = $request -> nombres;
        $recepcionista -> apellidos = $request -> apellidos;
        $recepcionista -> dni = $request -> dni;
        $recepcionista -> turno = $request -> turno;
        $recepcionista -> telefono = $request -> telefono;
        $recepcionista -> rol = $request -> rol;
        $recepcionista -> email = $request -> email;
        $recepcionista -> password = Hash::make($request -> password);

        try {

            $recepcionista -> save();

            return response()->json([
                "message" => "Recepcionista registrado exitosamente"
            ], 200);

        } catch (Illuminate\Database\QueryException $error) {
            return response()->json([
                "message" => "No se pudo registrar al recepcionista"
            ], 409);
        }
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $recepcionista = User::find($request->id);

        if ($recepcionista) {

            return response()->json([
                "message" => "Recepcionista encontrado",
                "data" => $recepcionista,
            ], 200);

        } else {

            return response()->json([
                "message" => "Recepcionista no encontrado",
            ], 404);

        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        $deleted = User::destroy($id);

        if ($deleted) {
            return response()->json([
                'message' => 'Recepcionista eliminado correctamente',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Recepcionista no encontrado',
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
        $recepcionista = User::find($request -> _id);

        if($recepcionista) {

            try {

                if ($request -> tipo == 'updateUser') {

                    if ($request -> password != '') {

                        $recepcionista -> password = Hash::make($request->password);

                    }

                    $recepcionista -> email = $request -> email;

                } else {

                    $recepcionista -> nombres = $request -> nombres;
                    $recepcionista -> apellidos = $request -> apellidos;
                    $recepcionista -> dni = $request -> dni;
                    $recepcionista -> turno = $request -> turno;
                    $recepcionista -> telefono = $request -> telefono;

                }

                $recepcionista -> save();

                return response()->json([
                    "message" => "Recepcionista actualizado correctamente"
                ], 200);

            } catch (Illuminate\Database\QueryException $err) {

                return response()->json([
                    "message" => "No se pudieron actualizar los datos"
                ], 409);

            }

        } else {

            return response()->json([
                "message" => "Recepcionista no encontrado"
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
    public function listRecepcionistas(Request $request)
    {

        $administradores = User::where('rol', 'recepcionista')->get();

        if ($administradores) {
            $cantidad = $administradores->count();
            return response()->json([
                "message" => "Se han encontrado $cantidad recepcionistas",
                "data" => $administradores
            ], 200);
        } else {
            return response()->json([
                "message" => "No se han encontrado recepcionistas",
                "data" => []
            ], 404);
        }
    }
}

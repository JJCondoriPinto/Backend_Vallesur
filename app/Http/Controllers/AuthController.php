<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function checkAuth(Request $request)
    {
        if (Auth::guard('sanctum')->check()) {
            return response()->json([
                'status' => 200,
                'message' => 'Autenticado',
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'No autenticado',
            ], 400);
        }
    }

    public function checkAuthRole(Request $request)
    {
        if (Auth::guard('sanctum')->check() && Auth::guard('sanctum')->user()->rol == $request->input("rol")) {
            return response()->json([
                "status" => 200,
                "message" => "pasa"
            ]);
        } else {
            return response()->json([
                "status" => 400,
                "message" => "no pasa"
            ]);
        }
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!Auth::attempt($request->only("email", "password"))) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $token = $user->createToken('token')->plainTextToken;

        return $token;
    }

    public function logout()
    {

        // Borrar los datos de autenticación del guardia
        $guard = Auth::guard('sanctum');

        // Obtener el usuario autenticado
        $user = $guard->user();

        if ($user) {
            // Borrar todos los tokens de API del usuario
            $user->tokens()->delete();

            Session::flush();

            return response()->json([
                "message" => "Sesion cerrada correctamente"
            ], 200);
        } else {
            return response()->json([
                "message" => "Usted no estuvo autenticado"
            ], 401);
        }
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "nombres" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:users",
            "password" => "required|string|min:8",
            "rol" => "required|string",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 400,
                "message" => "No se pudo registrar",
                "error" => $validator->errors()
            ], 400);
        }

        $user = User::create(
            [
                "nombres" => $req->name,
                "email" => $req->email,
                "password" => Hash::make($req->password),
                "rol" => $req->role,
                "telefono" => $req->phone,
                "turno" => $req->turno,
                "apellidos" => $req->lastName,
                "dni" => $req->dni,

            ]
        );
        $token = $user->createToken("token")->plainTextToken;

        return response()->json([
            "status" => 200,
            "message" => "Administrador creado correctamente"
        ]);
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
}

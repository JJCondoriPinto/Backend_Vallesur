<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function checkAuth(Request $req)
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

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!Auth::attempt($request->only("email", "password"))) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $token = $user->createToken('token')->plainTextToken;

        return $token;
    }

    public function logout() {

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
}

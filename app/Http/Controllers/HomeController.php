<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkin;
use App\Models\Checkout;
use App\Models\Huesped;
use App\Models\Habitacion;
use App\Models\Reserva;

class HomeController extends Controller
{
    public function countCheckins(Request $request) {

        $checkins = Checkin::count();

        return response()->json([
            "message" => "Numero de checkins",
            "data" => $checkins
        ]);

    }
    public function countCheckouts(Request $request) {

        $checkouts = Checkout::count();

        return response()->json([
            "message" => "Numero de checkouts",
            "data" => $checkouts
        ]);

    }

    public function countHuespedes(Request $request) {

        $huespedes = Huesped::count();

        return response()->json([
            "message" => "Numero de huespedes actuales",
            "data" => $huespedes
        ]);

    }

    public function countRecepcionistas(Request $request) {

        $recepcionistas = Huesped::count();

        return response()->json([
            "message" => "Numero de recepcionistas registrados",
            "data" => $recepcionistas
        ]);

    }

    public function countHabitaciones(Request $request) {

        $habitaciones = Habitacion::where('estado', 'Ocupado')->get();

        return response()->json([
            "message" => "Numero de habitaciones ocupadas",
            "data" => $habitaciones
        ]);

    }

    public function countReservas(Request $request) {

        $reservas = Reserva::count();

        return response()->json([
            "message" => "Numero de reservas",
            "data" => $reservas
        ]);

    }
}

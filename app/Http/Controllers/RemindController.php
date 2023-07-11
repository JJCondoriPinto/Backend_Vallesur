<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Remind;

class RemindController extends Controller
{
    public function index(Request $request) {

        $reminds = Remind::all();

        return response()->json([
            "data" => $reminds
        ]);

    }
    public function create(Request $request) {

        $remind = new Remind;

        $remind -> titulo = $request -> titulo;
        $remind -> descripcion = $request -> descripcion;

        $remind -> save();

        return response()->json([
            "message" => "Remin creado",
            "data" => $remind
        ]);
    }

    public function destroy(Request $request, $id) {

        Remind::destroy($id);

        return response()->json(null, 204);
    }
}

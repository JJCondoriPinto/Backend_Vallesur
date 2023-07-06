<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\User;
use App\Models\Huesped;
use App\Models\Articulo;

class GraficosController extends Controller
{
    public function servicios_mas_consumidos ()
    {
        $result = Servicio::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$tipo',
                        'costoPromedio' => ['$avg' => '$costo']
                    ]
                ]
            ]);
        });

        $data = [];
        foreach($result as $row){
            $data[] = [
                'tipo' => $row->_id,
                "costoPromedio" => $row->costoPromedio
            ];
        }
        return response()->json($data);
    }

    public function administrador_por_turno()
    {
        $result = User::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$turno',
                        'count' => ['$sum' => 1]
                    ]
                ]
            ]);
        });

        $data = [];

        foreach ($result as $row) {
            $data[] = [
                'turno' => $row->_id,
                'count' => $row->count
            ];
        }

        return response()->json($data);
    }

    public function huesped_por_nacionalidad()
    {
        $result = Huesped::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$nacionalidad',
                        'count' => ['$sum' => 1]
                    ]
                ]
            ]);
        });

        $data = [];

        foreach ($result as $row) {
            $data[] = [
                'nacionalidad' => $row->_id,
                'count' => $row->count
            ];
        }

        return response()->json($data);
    }

    public function graficar_barras()
    {
        $datos = Articulo::all();

        $json = json_encode($datos, JSON_UNESCAPED_UNICODE);

        if (!empty($datos)){
            return response()->json([
                'message' => 'Datos compilados correctamente',
                'data' => $datos,
            ], 200);
        }
        else{
            return response()->json([
                'message' => 'Datos no encontrados',
                'data' => [],
            ], 404);
        }
    }

    public function personas_por_empresa()
    {
        $result = Huesped::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$unwind' => '$Empresa'
                ],
                [
                    '$group' => [
                        '_id' => '$Empresa.nombre_empresa',
                        'cantidad_personas' => ['$sum' => 1]
                    ]
                ]
            ]);
        });

        $data = [];
        foreach ($result as $row) {
            $data[] = [
                'nombre_empresa' => $row->_id,
                'cantidad_personas' => $row->cantidad_personas
            ];
        }

        return response()->json($data);
    }

    public function checkins_por_año()
    {
        $result = Checkin::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => ['$year' => '$fecha_ingreso'],
                        'count' => ['$sum' => 1]
                    ]
                ],
                [
                    '$sort' => ['_id' => 1]
                ]
            ]);
        });

        $data = [];

        foreach ($result as $row) {
            $data[] = [
                'año' => $row->_id,
                'count' => $row->count
            ];
        }

        return response()->json($data);
    }

}

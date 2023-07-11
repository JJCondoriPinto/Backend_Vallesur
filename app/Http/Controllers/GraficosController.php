<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\User;
use App\Models\Huesped;
use App\Models\Articulo;
use App\Models\Checkin;
use App\Models\Checkout;
use App\Models\Reserva;
use App\Models\Habitacion;

class GraficosController extends Controller
{
    public function servicios_mas_consumidos()
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
        foreach ($result as $row) {
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

        if (!empty($datos)) {
            return response()->json([
                'message' => 'Datos compilados correctamente',
                'data' => $datos,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Datos no encontrados',
                'data' => [],
            ], 404);
        }
    }

    public function checkins_por_año()
    {
        $result = Checkin::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => ['$substr' => ['$fecha_ingreso', 0, 4]],
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

    public function checkouts_por_año()
    {
        $result = Reserva::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => [
                            '$year' => ['$dateFromString' => ['dateString' => '$datosReserva.fecha_checkout']]
                        ],
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
                'año' => $row['_id'],
                'count' => $row['count']
            ];
        }

        return response()->json($data);
    }

    public function habitaciones_max_precio()
    {
        $result = Habitacion::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$nro_piso',
                        'maxPrecio' => ['$max' => '$precio']
                    ]
                ],
                [
                    '$sort' => ['_id' => 1]
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'nro_piso' => '$_id',
                        'maxPrecio' => 1
                    ]
                ]
            ]);
        });

        $data = [];

        foreach ($result as $row) {
            $data[] = [
                'nro_piso' => $row['nro_piso'],
                'maxPrecio' => $row['maxPrecio']
            ];
        }

        return response()->json($data);
    }
}

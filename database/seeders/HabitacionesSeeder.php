<?php

namespace Database\Seeders;

use App\Models\Habitacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* Habitacion::create([

        ]); */
        $datahabitacion = [
            [
                "nro_habitacion" => 201,
                "nro_piso" => "2",
                "tipo_habitacion" => "Doble Estándar",
                "precio" => 160.00,
                "estado" => "Disponible",
                "tamaño" => "10.10 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 202,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 203,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 204,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 205,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 206,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 301,
                "nro_piso" => "3",
                "tipo_habitacion" => "Doble",
                "precio" => 240.00,
                "estado" => "Disponible",
                "tamaño" => "9.10 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "tipo_cama" => "Cama 1.5 plazas"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 1,
                        "descripcion" => "1.5 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 302,
                "nro_piso" => "3",
                "tipo_habitacion" => "Doble Superior",
                "precio" => 180.00,
                "estado" => "Disponible",
                "tamaño" => "11.90 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 2 plazas"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 1,
                        "descripcion" => "1.5 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 303,
                "nro_piso" => "3",
                "tipo_habitacion" => "Suite Queen",
                "precio" => 280.00,
                "estado" => "Disponible",
                "tamaño" => "12.50 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG UltraFullHD 1203"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi/Hidromasaje caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 3 plazas"
                    ],
                    "escritorio" => [
                        "cantidad" => 1,
                        "descripcion" => "102x140 cm2"
                    ],
                    "refrigerador" => [
                        "cantidad" => 1,
                        "tipo" => "Mini-Refrigerador",
                        "descripcion" => "Samsung Freshing Frezze"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 2,
                        "descripcion" => "2.0 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 304,
                "nro_piso" => "3",
                "tipo_habitacion" => "Doble Estándar",
                "precio" => 160.00,
                "estado" => "Disponible",
                "tamaño" => "10.20 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 305,
                "nro_piso" => "3",
                "tipo_habitacion" => "Triple",
                "precio" => 320.00,
                "estado" => "Disponible",
                "tamaño" => "14.20 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Xiami FullHD 5243"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 3,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 401,
                "nro_piso" => "4",
                "tipo_habitacion" => "Suite King",
                "precio" => 330.00,
                "estado" => "Disponible",
                "tamaño" => "15.75 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG UltraFullHD 1203"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi/Hidromasaje caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 3 plazas"
                    ],
                    "escritorio" => [
                        "cantidad" => 1,
                        "descripcion" => "102x140 cm2"
                    ],
                    "refrigerador" => [
                        "cantidad" => 1,
                        "descripcion" => "Mini-Refrigerador Samsung Freshing Frezze",
                    ],
                    "vista_exterior" => [
                        "cantidad" => 2,
                        "descripcion" => "2.0 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 402,
                "nro_piso" => "4",
                "tipo_habitacion" => "Doble Superior",
                "precio" => 180.00,
                "estado" => "Disponible",
                "tamaño" => "11.90 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 2 plazas"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 1,
                        "descripcion" => "1.5 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 403,
                "nro_piso" => "4",
                "tipo_habitacion" => "Doble Superior",
                "precio" => 180.00,
                "estado" => "Disponible",
                "tamaño" => "11.90 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 2 plazas"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 1,
                        "descripcion" => "1.5 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 404,
                "nro_piso" => "4",
                "tipo_habitacion" => "Suite Queen",
                "precio" => 280.00,
                "estado" => "Disponible",
                "tamaño" => "12.50 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG UltraFullHD 1203"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi/Hidromasaje caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 3 plazas"
                    ],
                    "escritorio" => [
                        "cantidad" => 1,
                        "descripcion" => "102x140 cm2"
                    ],
                    "refrigerador" => [
                        "cantidad" => 1,
                        "descripcion" => "Mini-Refrigerado Samsung Freshing Frezze"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 2,
                        "descripcion" => "2.0 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 405,
                "nro_piso" => "4",
                "tipo_habitacion" => "Doble Estándar",
                "precio" => 160.00,
                "estado" => "Disponible",
                "tamaño" => "10.20 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 406,
                "nro_piso" => "4",
                "tipo_habitacion" => "Triple",
                "precio" => 320.00,
                "estado" => "Disponible",
                "tamaño" => "14.20 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Xiami FullHD 5243"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 3,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 501,
                "nro_piso" => "5",
                "tipo_habitacion" => "Suite Queen",
                "precio" => 280.00,
                "estado" => "Disponible",
                "tamaño" => "12.50 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG UltraFullHD 1203"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi/Hidromasaje caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 3 plazas"
                    ],
                    "escritorio" => [
                        "cantidad" => 1,
                        "descripcion" => "102x140 cm2"
                    ],
                    "refrigerador" => [
                        "cantidad" => 1,
                        "descripcion" => "Mini-Refrigerador Samsung Freshing Frezze",
                    ],
                    "vista_exterior" => [
                        "cantidad" => 2,
                        "descripcion" => "2.0 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 502,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 503,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "7.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 504,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 505,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Disponible",
                "tamaño" => "5.95 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "LG FullHD 1302"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha caliente"
                    ],
                    "cama" => [
                        "cantidad" => 1,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 506,
                "nro_piso" => "5",
                "tipo_habitacion" => "Doble",
                "precio" => 240.00,
                "estado" => "Disponible",
                "tamaño" => "9.10 m2",
                "reservado_desde"=>"",
                "reservado_hasta"=>"",
                "caracteristicas" => [
                    "television" => [
                        "cantidad" => 1,
                        "descripcion" => "Samsung  FullHD 4000"
                    ],
                    "baño" => [
                        "cantidad" => 1,
                        "descripcion" => "Ducha/Jacuzzi caliente"
                    ],
                    "cama" => [
                        "cantidad" => 2,
                        "descripcion" => "Cama 1.5 plazas"
                    ],
                    "vista_exterior" => [
                        "cantidad" => 1,
                        "descripcion" => "1.5 m2"
                    ]
                ],
                "imagen" => "https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ]
        ];
        habitacion::insert($datahabitacion);
    }
}

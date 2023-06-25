<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Servicio;
use App\Models\Reserva;
use App\Models\Huesped;
use App\Models\Habitacion;
use App\Models\Checkout;
use App\Models\Checkin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            // Se supone que el id es el dni
            'dni' => '72912312',
            'nombres' => "Juan Carlos",
            'apellidos' => "Gutierrez Bolaños",
            'turno' => 'Mañana',
            'telefono' => '917235120',
            'name'=>'admin',
            'email'=>'admin@gmail.com',
                'password'=>Hash::make('12345678'),
                'role'=>'admin'
        ]);

        User::create([
            'dni' => '12345678',
            'nombres' => 'María Fernández',
            'apellidos' => 'Gómez Rodríguez',
            'turno' => 'Tarde',
            'telefono' => '987654321',
            'name' => 'maria',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin'
        ]);


        User::create([
            'dni' => '87654321',
            'nombres' => 'Pedro Ramírez',
            'apellidos' => 'López Torres',
            'turno' => 'Mañana',
            'telefono' => '654321987',
            'name' => 'pedro',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('password456'),
            'role' => 'admin'
        ]);


        User::create([
            'dni' => '98765432',
            'nombres' => 'Ana López',
            'apellidos' => 'García Pérez',
            'turno' => 'Noche',
            'telefono' => '123456789',
            'name' => 'ana',
            'email' => 'ana@gmail.com',
            'password' => Hash::make('password789'),
            'role' => 'admin'
        ]);


        User::create([
            'dni' => '54321678',
            'nombres' => 'Carlos Martínez',
            'apellidos' => 'Sánchez Gómez',
            'turno' => 'Mañana',
            'telefono' => '987654321',
            'name' => 'carlos',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('passwordabc'),
            'role' => 'admin'
        ]);



        User::create([
            'name'=>'gerente',
            'email'=>'gerente@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=>'gerente'
        ]);

        $checkin = [
            [
                'id_checkin' => 1,
                'id_huesped' => 1,
                'nro_habitacion'=> 201,
                'dni_admin' => '72912312',
                'tipo_reserva' => 'telefono',
                'paxs' => 0,
                'cant_dias' => 5,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2021-09-15') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 2,
                'id_huesped' => 2,
                'nro_habitacion'=> 202,
                'dni_admin' => '72912312',
                'tipo_reserva' => 'presencial',
                'paxs' => 0,
                'cant_dias' => 3,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2022-10-08') * 1000),
                'notas_adicionales' => 'El registro es por solo 3 dias y dos noches',
            ],

            [
                'id_checkin' => 3,
                'id_huesped' => 3,
                'nro_habitacion'=> 203,
                'dni_admin' => '72912312',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 0,
                'cant_dias' => 7,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2022-10-25') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 4,
                'id_huesped' => 4,
                'nro_habitacion'=> 204,
                'dni_admin' => '72912312',
                'tipo_reserva' => 'telefono',
                'paxs' => 0,
                'cant_dias' => 2,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-01-15') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 5,
                'id_huesped' => 5,
                'nro_habitacion'=> 205,
                'dni_admin' => '72912312',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 0,
                'cant_dias' => 6,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-01-15') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 6,
                'id_huesped' => 6,
                'nro_habitacion'=> 301,
                'dni_admin' => '87654321',
                'tipo_reserva' => 'telefono',
                'paxs' => 1,
                'cant_dias' => 6,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-05-09') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 7,
                'id_huesped' => 7,
                'nro_habitacion'=> 302,
                'dni_admin' => '87654321',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 1,
                'cant_dias' => 5,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-04-18') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 8,
                'id_huesped' => 8,
                'nro_habitacion'=> 303,
                'dni_admin' => '87654321',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 1,
                'cant_dias' => 2,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-03-10') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 9,
                'id_huesped' => 9,
                'nro_habitacion'=> 304,
                'dni_admin' => '87654321',
                'tipo_reserva' => 'telefono',
                'paxs' => 1,
                'cant_dias' => 4,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2022-10-23') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 10,
                'id_huesped' => 10,
                'nro_habitacion'=> 406,
                'dni_admin' => '98765432',
                'tipo_reserva' => 'telefono',
                'paxs' => 2,
                'cant_dias' => 7,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2022-06-10') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 11,
                'id_huesped' => 11,
                'nro_habitacion'=> 406,
                'dni_admin' => '98765432',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 2,
                'cant_dias' => 10,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2022-07-15') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 12,
                'id_huesped' => 12,
                'nro_habitacion'=> 405,
                'dni_admin' => '98765432',
                'tipo_reserva' => 'telefono',
                'paxs' => 1,
                'cant_dias' => 4,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2022-07-15') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 13,
                'id_checkin' => 13,
                'nro_habitacion'=> 501,
                'dni_admin' => '98765432',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 0,
                'cant_dias' => 3,
                'motivo_viaje' => 'Negocios',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-04-10') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 14,
                'id_huesped' => 14,
                'nro_habitacion'=> 502,
                'dni_admin' => '98765432',
                'tipo_reserva' => 'telefono',
                'paxs' => 0,
                'cant_dias' => 5,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-02-14') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],

            [
                'id_checkin' => 15,
                'id_huesped' => 15,
                'nro_habitacion'=> 504,
                'dni_admin' => '98765432',
                'tipo_reserva' => 'aplicativo',
                'paxs' => 0,
                'cant_dias' => 4,
                'motivo_viaje' => 'Turismo',
                'fecha_ingreso' => new UTCDateTime(strtotime('2023-12-11') * 1000),
                'notas_adicionales' => 'El pago se realizo con normalidad',
            ],
        ];Checkin::insert($checkin);

        $checkout = [
            [
                'id_checkin' => 1,
                'dni_admin' => '54321678',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'efectivo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2021-09-20') * 1000),
                'descripcion_estadia' => 'El huesped es adecuado',
            ],

            [
                'id_checkin' => 2,
                'dni_admin' => '54321678',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'aplicativo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2022-10-11') * 1000),
                'descripcion_estadia' => 'El huesped es adecuado',
            ],

            [
                'id_checkin' => 3,
                'dni_admin' => '54321678',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'aplicativo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2022-11-01') * 1000),
                'descripcion_estadia' => 'El huesped es adecuado',
            ],

            [
                'id_checkin' => 4,
                'dni_admin' => '54321678',
                'entrega_llaves' => 'No',
                'forma_pago' => 'ninguno',
                'estado_pago' => 'pendiente',
                'fecha_salida' => new UTCDateTime(strtotime('2023-01-17') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],

            [
                'id_checkin' => 5,
                'dni_admin' => '98765432',
                'entrega_llaves' => 'No',
                'forma_pago' => 'ninguno',
                'estado_pago' => 'pendiente',
                'fecha_salida' => new UTCDateTime(strtotime('2023-01-21') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],

            [
                'id_checkin' => 6,
                'dni_admin' => '98765432',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'efectivo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2023-05-15') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],

            [
                'id_checkin' => 7,
                'dni_admin' => '98765432',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'aplicativo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2023-04-23') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],

            [
                'id_checkin' => 8,
                'dni_admin' => '98765432',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'aplicativo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2023-03-12') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],

            [
                'id_checkin' => 9,
                'dni_admin' => '87654321',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'aplicativo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2022-10-27') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],

            [
                'id_checkin' => 10,
                'dni_admin' => '87654321',
                'entrega_llaves' => 'Si',
                'forma_pago' => 'efectivo',
                'estado_pago' => 'cancelado',
                'fecha_salida' => new UTCDateTime(strtotime('2022-06-17') * 1000),
                'descripcion_estadia' => 'El huesped no es adecuado',
            ],
        ];Checkout::insert($checkout);

        $datahabitacion = [
            [
                "nro_habitacion" => 201,
                "nro_piso" => "2",
                "tipo_habitacion" => "Doble Estándar",
                "precio" => 160.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 202,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 203,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
             [
                 "nro_habitacion" => 204,
                 "nro_piso" => "2",
                 "tipo_habitacion" => "Individual",
                 "precio" => 140.00,
                 "estado" => "Libre",
                 "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                 "cant_reservas" => [
                     ""
                 ],
                 "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
             ],
             [
                 "nro_habitacion" => 205,
                 "nro_piso" => "2",
                 "tipo_habitacion" => "Individual",
                 "precio" => 140.00,
                 "estado" => "Libre",
                 "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 206,
                "nro_piso" => "2",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 301,
                "nro_piso" => "3",
                "tipo_habitacion" => "Doble",
                "precio" => 240.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 302,
                "nro_piso" => "3",
                "tipo_habitacion" => "Doble Superior",
                "precio" => 180.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 303,
                "nro_piso" => "3",
                "tipo_habitacion" => "Suite Queen",
                "precio" => 280.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, Jacuzzi",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 304,
                "nro_piso" => "3",
                "tipo_habitacion" => "Doble Estándar",
                "precio" => 160.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 305,
                "nro_piso" => "3",
                "tipo_habitacion" => "Triple",
                "precio" => 320.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 3 Camas",
                "cant_reservas" => [
                    "B1"
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 401,
                "nro_piso" => "4",
                "tipo_habitacion" => "Suite King",
                "precio" => 330.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, Jacuzzi, Cama King",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 402,
                "nro_piso" => "4",
                "tipo_habitacion" => "Doble Superior",
                "precio" => 180.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 403,
                "nro_piso" => "4",
                "tipo_habitacion" => "Doble Superior",
                "precio" => 180.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 404,
                "nro_piso" => "4",
                "tipo_habitacion" => "Suite Queen",
                "precio" => 280.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, Jacuzzi, Cama Queen",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 405,
                "nro_piso" => "4",
                "tipo_habitacion" => "Doble Estándar",
                "precio" => 160.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 406,
                "nro_piso" => "4",
                "tipo_habitacion" => "Triple",
                "precio" => 320.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 3 Camas",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 501,
                "nro_piso" => "5",
                "tipo_habitacion" => "Suite Queen",
                "precio" => 280.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, Jacuzzi, Cama Queen",
                "cant_reservas" => [
                    "B2"
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 502,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 503,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                "precio" => 140.00,
                "estado" => "Libre",
                "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                "cant_reservas" => [
                    ""
                ],
                "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
            ],
            [
                "nro_habitacion" => 504,
                "nro_piso" => "5",
                "tipo_habitacion" => "Individual",
                 "precio" => 140.00,
                 "estado" => "Libre",
                 "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                 "cant_reservas" => [
                     ""
                 ],
                 "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
             ],
             [
                 "nro_habitacion" => 505,
                 "nro_piso" => "5",
                 "tipo_habitacion" => "Individual",
                 "precio" => 140.00,
                 "estado" => "Libre",
                 "caracteristicas" => "Televisión, Baño privado, 1 Cama",
                 "cant_reservas" => [
                     ""
                 ],
                 "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
             ],
             [
                 "nro_habitacion" => 506,
                 "nro_piso" => "5",
                 "tipo_habitacion" => "Doble",
                 "precio" => 240.00,
                 "estado" => "Libre",
                 "caracteristicas" => "Televisión, Baño privado, 2 Camas",
                 "cant_reservas" => [
                     ""
                 ],
                 "imagen"=>"https://image-tc.galaxy.tf/wijpeg-axw5v17qr09qa28z5mfpaam09/delfines-hotel-peru-lima-accommodation-superior-room-tripadvisor-booking-bed_standard.jpg?crop=67%2C0%2C1067%2C800"
             ],
        ];
        Habitacion::insert($datahabitacion);

        $huespedes =[
            [
                '_id' => 1,
                'identificacion' => '75844456',
                'nombres' => 'Neals Marek',
                'apellidos' => 'Paye Aguilar',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1995-09-20') * 1000),
                'nacionalidad' => 'Perú',
                'region_direccion' => 'Arequipa',
                'telefono' => '980810448',
                'correo' => 'neals.paye@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Google',
                        'RUC' => '239712312',
                        'razon_social' => 'S.A.C',
                        'direccion_empresa' => 'Los Angeles'
                    ]
                ]
            ],

            [
                '_id' => 2,
                'identificacion' => '98765432',
                'nombres' => 'Laura',
                'apellidos' => 'González',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1995-03-12') * 1000),
                'nacionalidad' => 'Argentina',
                'region_direccion' => 'Buenos Aires',
                'telefono' => '1122334455',
                'correo' => 'laura.gonzalez@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Microsoft',
                        'RUC' => '987654321',
                        'razon_social' => 'S.A.',
                        'direccion_empresa' => 'Redmond'
                    ]
                ]
            ],

            [
                '_id' => 3,
                'identificacion' => '12345678',
                'nombres' => 'John',
                'apellidos' => 'Smith',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('2005-08-20') * 1000),
                'nacionalidad' => 'Estados Unidos',
                'region_direccion' => 'California',
                'telefono' => '5557778888',
                'correo' => 'john.smith@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Apple',
                        'RUC' => '876543210',
                        'razon_social' => 'Inc.',
                        'direccion_empresa' => 'Cupertino'
                    ]
                ]
            ],

            [
                '_id' => 4,
                'identificacion' => '65432109',
                'nombres' => 'Maria',
                'apellidos' => 'López',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('2004-12-05') * 1000),
                'nacionalidad' => 'España',
                'region_direccion' => 'Madrid',
                'telefono' => '6677889900',
                'correo' => 'maria.lopez@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Amazon',
                        'RUC' => '765432109',
                        'razon_social' => 'LLC',
                        'direccion_empresa' => 'Seattle'
                    ]
                ]
            ],

            [
                '_id' => 5,
                'identificacion' => '11223344',
                'nombres' => 'Alex',
                'apellidos' => 'Johnson',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1986-06-30') * 1000),
                'nacionalidad' => 'Canadá',
                'region_direccion' => 'Toronto',
                'telefono' => '2233445566',
                'correo' => 'alex.johnson@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Facebook',
                        'RUC' => '654321098',
                        'razon_social' => 'Inc.',
                        'direccion_empresa' => 'Menlo Park'
                    ]
                ]
            ],
            [
                '_id' => 6,
                'identificacion' => '98765432',
                'nombres' => 'Carolina',
                'apellidos' => 'Martínez',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1995-01-18') * 1000),
                'nacionalidad' => 'Colombia',
                'region_direccion' => 'Bogotá',
                'telefono' => '3344556677',
                'correo' => 'carolina.martinez@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Netflix',
                        'RUC' => '321098765',
                        'razon_social' => 'Inc.',
                        'direccion_empresa' => 'Los Gatos'
                    ]
                ]
            ],

            [
                '_id' => 7,
                'identificacion' => '54321098',
                'nombres' => 'Emily',
                'apellidos' => 'Brown',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1993-09-25') * 1000),
                'nacionalidad' => 'Reino Unido',
                'region_direccion' => 'Londres',
                'telefono' => '9988776655',
                'correo' => 'emily.brown@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Tesla',
                        'RUC' => '210987654',
                        'razon_social' => 'Inc.',
                        'direccion_empresa' => 'Palo Alto'
                    ]
                ]
            ],

            [
                '_id' => 8,
                'identificacion' => '76543210',
                'nombres' => 'Andrés',
                'apellidos' => 'García',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1982-04-15') * 1000),
                'nacionalidad' => 'México',
                'region_direccion' => 'Ciudad de México',
                'telefono' => '1122003344',
                'correo' => 'andres.garcia@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Uber',
                        'RUC' => '543210987',
                        'razon_social' => 'Technologies Inc.',
                        'direccion_empresa' => 'San Francisco'
                    ]
                ]
            ],

            [
                '_id' => 9,
                'identificacion' => '20193847',
                'nombres' => 'Sophia',
                'apellidos' => 'Lee',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1996-07-22') * 1000),
                'nacionalidad' => 'Corea del Sur',
                'region_direccion' => 'Seúl',
                'telefono' => '7766554433',
                'correo' => 'sophia.lee@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Samsung',
                        'RUC' => '432109876',
                        'razon_social' => 'Electronics Co., Ltd.',
                        'direccion_empresa' => 'Suwon'
                    ]
                ]
            ],

            [
                '_id' => 10,
                'identificacion' => '87654321',
                'nombres' => 'Pedro',
                'apellidos' => 'Rodríguez',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1987-11-08') * 1000),
                'nacionalidad' => 'Chile',
                'region_direccion' => 'Santiago',
                'telefono' => '8899776655',
                'correo' => 'pedro.rodriguez@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Intel',
                        'RUC' => '109876543',
                        'razon_social' => 'Corporation',
                        'direccion_empresa' => 'Santa Clara'
                    ]
                ]
            ],
            [
                '_id' => 11,
                'identificacion' => '24681357',
                'nombres' => 'Ana',
                'apellidos' => 'Gómez',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1991-09-02') * 1000),
                'nacionalidad' => 'España',
                'region_direccion' => 'Barcelona',
                'telefono' => '6655443322',
                'correo' => 'ana.gomez@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Ninguno'
                    ]
                ]
            ],

            [
                '_id' => 12,
                'identificacion' => '13579246',
                'nombres' => 'Michael',
                'apellidos' => 'Johnson',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1981-05-15') * 1000),
                'nacionalidad' => 'Estados Unidos',
                'region_direccion' => 'Nueva York',
                'telefono' => '7788990011',
                'correo' => 'michael.johnson@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Ninguno'
                    ]
                ]
            ],

            [
                '_id' => 13,
                'identificacion' => '98765431',
                'nombres' => 'Isabella',
                'apellidos' => 'López',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1994-12-10') * 1000),
                'nacionalidad' => 'Colombia',
                'region_direccion' => 'Medellín',
                'telefono' => '3322114455',
                'correo' => 'isabella.lopez@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Ninguno'
                    ]
                ]
            ],

            [
                '_id' => 14,
                'identificacion' => '12345679',
                'nombres' => 'Daniel',
                'apellidos' => 'Kim',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1986-08-25') * 1000),
                'nacionalidad' => 'Corea del Sur',
                'region_direccion' => 'Seúl',
                'telefono' => '6677880011',
                'correo' => 'daniel.kim@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Ninguno'
                    ]
                ]
            ],

            [
                '_id' => 15,
                'identificacion' => '54321097',
                'nombres' => 'Sophie',
                'apellidos' => 'Dubois',
                'sexo' => 'Femenino',
                'fecha_nacimiento' => new UTCDateTime(strtotime('1993-03-20') * 1000),
                'nacionalidad' => 'Francia',
                'region_direccion' => 'París',
                'telefono' => '8899002211',
                'correo' => 'sophie.dubois@gmail.com',
                'Empresa' => [
                    [
                        'nombre_empresa' => 'Ninguno'
                    ]
                ]
            ],

        ];
        Huesped::insert($huespedes);

        $Servicios = [
            [
                'id_checkin' => 1,
                'costo' => 100,
                'descripcion' => 'Ambientacion de Cuarto',
                'tipo' => 'Decorativo'
            ],

            [
                'id_checkin' => 2,
                'costo' => 30,
                'descripcion' => 'Desayuno Especial',
                'tipo' => 'Alimentos'
            ],

            [
                'id_checkin' => 3,
                'costo' => 30,
                'descripcion' => 'Cena Especial',
                'tipo' => 'Alimentos'
            ],

            [
                'id_checkin' => 4,
                'costo' => 100,
                'descripcion' => 'Decoracion San Valentin',
                'tipo' => 'Decorativo'
            ],

            [
                'id_checkin' => 5,
                'costo' => 70,
                'descripcion' => 'Compra de Pizza Hut',
                'tipo' => 'Alimentos'
            ],

            [
                'id_checkin' => 6,
                'costo' => 200,
                'descripcion' => 'Fiesta Tematica',
                'tipo' => 'Decorativo'
            ],

            [
                'id_checkin' => 7,
                'costo' => 70,
                'descripcion' => 'Compra de Hamburguessas Burker King',
                'tipo' => 'Alimentos '
            ],

            [
                'id_checkin' => 8,
                'costo' => 200,
                'descripcion' => 'Decoracion San Valentin',
                'tipo' => 'Decorativo'
            ],

            [
                'id_checkin' => 9,
                'costo' => 150,
                'descripcion' => 'Fiesta de cumpleaños',
                'tipo' => 'Decorativo'
            ],

            [
                'id_checkin' => 10,
                'costo' => 60,
                'descripcion' => 'Cena Especial',
                'tipo' => 'Alimentos'
            ],
        ];
        Servicio::insert($Servicios);
    }
}

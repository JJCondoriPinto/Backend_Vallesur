<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use MongoDB\BSON\UTCDateTime;
use App\Models\User;
use App\Models\Servicio;
use App\Models\Reserva;
use App\Models\Huesped;
use App\Models\Habitacion;
use App\Models\Checkout;
use App\Models\Checkin;
use MongoDB\BSON\ObjectId;


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
            '_id' => new ObjectId('610e55516c5ce063389c0001'),
            'dni' => '75844456',
            'nombres' => "Juan Carlos",
            'apellidos' => "Gutierrez Bolaños",
            'turno' => 'Mañana',
            'telefono' => '917235120',
            'name'=>'admin',
            'email'=>'admin@gmail.com',
                'password'=>Hash::make('12345678'),
                'rol'=>'recepcionista'
        ]);

        User::create([
            '_id' => new ObjectId('610e55516c5ce063384c0002'),
            'dni' => '12345678',
            'nombres' => 'María Fernández',
            'apellidos' => 'Gómez Rodríguez',
            'turno' => 'Tarde',
            'telefono' => '987654321',
            'name' => 'maria',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('password123'),
            'rol' => 'recepcionista'
        ]);


        User::create([
            '_id' => new ObjectId('610e55516c5ce063384c0003'),
            'dni' => '87654321',
            'nombres' => 'Pedro Ramírez',
            'apellidos' => 'López Torres',
            'turno' => 'Mañana',
            'telefono' => '654321987',
            'name' => 'pedro',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('password456'),
            'rol' => 'recepcionista'
        ]);


        User::create([
            '_id' => new ObjectId('610e55516c5ce063384c0004'),
            'dni' => '98765432',
            'nombres' => 'Ana López',
            'apellidos' => 'García Pérez',
            'turno' => 'Noche',
            'telefono' => '123456789',
            'name' => 'ana',
            'email' => 'ana@gmail.com',
            'password' => Hash::make('password789'),
            'rol' => 'recepcionista'
        ]);


        User::create([
            '_id' => new ObjectId('610e55516c5ce063384c0005'),
            'dni' => '54321678',
            'nombres' => 'Carlos Martínez',
            'apellidos' => 'Sánchez Gómez',
            'turno' => 'FinesSemana',
            'telefono' => '987654321',
            'name' => 'carlos',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('passwordabc'),
            'rol' => 'recepcionista'
        ]);

        User::create([
            'name'=>'gerente',
            'email'=>'gerente@gmail.com',
            'password'=>Hash::make('12345678'),
            'rol'=>'gerente'
        ]);
    }
}

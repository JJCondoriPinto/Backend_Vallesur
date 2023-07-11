<?php

namespace Database\Seeders;

use App\Models\Checkout;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use MongoDB\BSON\ObjectId;
use Faker\Factory as Faker;

class CheckoutSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Checkout::create([
            '_id' => new ObjectId('64a74315e6f447211f0174a2'),
            "id_checkin" => '64a7268994ff3e291f0dbb62',
            "id_recepcionista" => '610e55516c5ce063389c0001',
            "descripcion_salida" => 'buena',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7b5'),
            'id_checkin' => '64a867ff9639af50d10bfb10',
            'id_recepcionista' => '610e55516c5ce063384c0002',
            'descripcion_salida' => 'Sed expedita nostrum ratione pariatur maxime.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7b8'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb15'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Perferendis aut aut quis ut.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7bb'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb18'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Et ea dolorem minus cum et.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7be'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb1b'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Ipsum rem minus itaque et excepturi est.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7c1'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb1e'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Esse minima et totam veritatis.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7c4'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb21'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Repudiandae molestiae corporis quis esse rerum cupiditate provident.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7c7'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb24'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'descripcion_salida' => 'Harum ea sint sed quam.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7ca'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb27'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'descripcion_salida' => 'Pariatur neque et eum.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7cd'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb2a'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'descripcion_salida' => 'Non pariatur excepturi quos qui ipsa.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7d0'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb2d'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'descripcion_salida' => 'Atque laborum eligendi sapiente expedita laborum voluptate.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7d3'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb30'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0004'),
            'descripcion_salida' => 'Neque tempora sequi modi quo.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7d6'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb33'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0005'),
            'descripcion_salida' => 'Numquam officia et aut labore.',
        ]);
        // 14
        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7eb'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb36'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0005'),
            'descripcion_salida' => 'paso paso.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7ee'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb39'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'descripcion_salida' => 'Repellendus modi et enim quo recusandae nostrum enim voluptatum.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7f1'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb3c'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Est quod ullam ut.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7f4'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb3f'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Officiis nobis quos facilis et vel ullam qui.',
        ]);

        Checkout::create([
            '_id' => new ObjectId('64a88010199a1fa6f106c7fd'),
            'id_checkin' => new ObjectId('64a868009639af50d10bfb42'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'descripcion_salida' => 'Dolor nostrum quasi quo ut minus.',
        ]);

    }
}

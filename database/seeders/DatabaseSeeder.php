<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'nombres' => 'Admin1',
            'apellidos' => 'Ad1',
            'dni' => 77777777,
            'telefono' => 999999999,
            'rol' => 'gerente',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
        ]);

        \App\Models\User::factory()->create([
            'nombres' => 'Admin2',
            'apellidos' => 'Ad2',
            'dni' => 66666666,
            'telefono' => 888888888,
            'rol' => 'recepcionista',
            'email' => 'recep@gmail.com',
            'password' => Hash::make(12345678),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Checkin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use MongoDB\BSON\ObjectId;
use Faker\Factory as Faker;

class CheckinSeeder extends Seeder
{

    public function run()
    {
        Checkin::create([
            '_id' => new ObjectId('64a7268994ff3e291f0dbb62'),
            "id_reserva" => '64a715ca0a433436eb0dfed2',
            "id_recepcionista" => '610e55516c5ce063389c0001',
            "paxs" => [
                "nombres" => "Mauricio Diego",
                "apellidos" => "Escalante Cunurana",
                "nro_documento" => "76010300",
                "fecha_nacimiento" => "09-04-2005",
                "sexo" => "Masculino",
                "region" => "Ilo",
                "direccion" => "Alto Ilo A-12"
            ],
            "fecha_ingreso" => '2023-07-07',
            "nota_adicionales" => 'buena',
            "estado" => "active"
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a867ff9639af50d10bfb10'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc13'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063389c0001'),
            'paxs' => [
                'nombres' => 'Devon',
                'apellidos' => 'Heidenreich',
                'nro_documento' => '48898148',
                'fecha_nacimiento' => '14-11-2019',
                'sexo' => 'Masculino',
                'region' => 'Port Samaraborough',
                'direccion' => '721 Cleta SummitPort Verlie, WA 71193',
            ],
            'fecha_ingreso' => '1973-04-26',
            'nota_adicionales' => 'Sed fugit cupiditate nostrum.',
            'estado' => 'inactive',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb15'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc14'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063389c0001'),
            'paxs' => [
                'nombres' => 'Adela',
                'apellidos' => 'Boyer',
                'nro_documento' => '65783030',
                'fecha_nacimiento' => '25-05-1994',
                'sexo' => 'Femenino',
                'region' => 'West Mertieberg',
                'direccion' => '83449 Conroy Mountains Suite 192Koeppshire, CO 30470-6574',
            ],
            'fecha_ingreso' => '1984-11-08',
            'nota_adicionales' => 'Velit quas enim omnis debitis magnam.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb18'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc15'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063389c0001'),
            'paxs' => [
                'nombres' => 'Jo',
                'apellidos' => 'Schowalter',
                'nro_documento' => '45856277',
                'fecha_nacimiento' => '10-04-2016',
                'sexo' => 'Femenino',
                'region' => 'North Cindy',
                'direccion' => '2043 Halle IslandsPort Micheleland, CA 87464',
            ],
            'fecha_ingreso' => '2022-09-13',
            'nota_adicionales' => 'Veniam ut asperiores qui enim.',
            'estado' => 'inactive',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb1b'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc16'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063389c0001'),
            'paxs' => [
                'nombres' => 'Reggie',
                'apellidos' => 'Haag',
                'nro_documento' => '50847904',
                'fecha_nacimiento' => '08-08-2021',
                'sexo' => 'Femenino',
                'region' => 'Keaganfort',
                'direccion' => '977 Murphy Loop Suite 379North Griffin, ME 74524-0145',
            ],
            'fecha_ingreso' => '2014-04-26',
            'nota_adicionales' => 'Aliquid ut earum culpa.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb1e'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc17'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'paxs' => [
                'nombres' => 'Felipa',
                'apellidos' => 'Kuvalis',
                'nro_documento' => '23930183',
                'fecha_nacimiento' => '06-11-2003',
                'sexo' => 'Femenino',
                'region' => 'West Rahsaanhaven',
                'direccion' => '3611 Johns CentersKathryneborough, ME 65678-1049',
            ],
            'fecha_ingreso' => '2012-12-01',
            'nota_adicionales' => 'Corrupti deserunt eveniet earum doloribus saepe perferendis.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb21'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc17'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'paxs' => [
                'nombres' => 'Simeon',
                'apellidos' => 'Rath',
                'nro_documento' => '56487340',
                'fecha_nacimiento' => '29-09-2015',
                'sexo' => 'Masculino',
                'region' => 'Jesusburgh',
                'direccion' => '92781 Beaulah Overpass Apt. 919West Will, CO 37516-3893',
            ],
            'fecha_ingreso' => '1980-07-04',
            'nota_adicionales' => 'Ratione saepe inventore aut nihil quos excepturi minus.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb24'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc18'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'paxs' => [
                'nombres' => 'Adele',
                'apellidos' => 'Rice',
                'nro_documento' => '57231591',
                'fecha_nacimiento' => '03-10-1983',
                'sexo' => 'Masculino',
                'region' => 'Maidabury',
                'direccion' => '84197 Dickinson Junctions Suite 886Port Ryleestad, MN 71967-9858',
            ],
            'fecha_ingreso' => '1983-11-22',
            'nota_adicionales' => 'Quis voluptatem earum aut.',
            'estado' => 'active',
        ]);


        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb27'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc19'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'paxs' => [
                'nombres' => 'Gillian',
                'apellidos' => 'Murphy',
                'nro_documento' => '72878226',
                'fecha_nacimiento' => '31-08-2012',
                'sexo' => 'Femenino',
                'region' => 'Lake Camren',
                'direccion' => '64397 Fahey KnollsMooreborough, OH 23997',
            ],
            'fecha_ingreso' => '2013-09-20',
            'nota_adicionales' => 'Autem provident eum dolorem labore.',
            'estado' => 'active',
        ]);


        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb2a'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc1a'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0002'),
            'paxs' => [
                'nombres' => 'Osbaldo',
                'apellidos' => 'Zulauf',
                'nro_documento' => '18774058',
                'fecha_nacimiento' => '22-11-1976',
                'sexo' => 'Femenino',
                'region' => 'Taureanside',
                'direccion' => '4351 Hazel ExtensionPaulineborough, CT 15197-4346',
            ],
            'fecha_ingreso' => '1989-06-05',
            'nota_adicionales' => 'Consequatur consequatur error perspiciatis dolores.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb2d'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc1b'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'paxs' => [
                'nombres' => 'Mya',
                'apellidos' => 'Fay',
                'nro_documento' => '35145440',
                'fecha_nacimiento' => '27-08-1973',
                'sexo' => 'Femenino',
                'region' => 'Gutmannville',
                'direccion' => '63973 Gladys Shores Apt. 809South Mellieshire, WI 26660',
            ],
            'fecha_ingreso' => '2009-01-04',
            'nota_adicionales' => 'Molestiae tempore quod aspernatur placeat aut.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb30'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc1c'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'paxs' => [
                'nombres' => 'Zackary',
                'apellidos' => 'Rath',
                'nro_documento' => '27836693',
                'fecha_nacimiento' => '06-07-1995',
                'sexo' => 'Masculino',
                'region' => 'Jastside',
                'direccion' => '529 Gleichner Manor Suite 268East Salvatoreburgh, ND 51199',
            ],
            'fecha_ingreso' => '1989-08-24',
            'nota_adicionales' => 'Enim ea repellat non atque aut dolorem expedita aliquid.',
            'estado' => 'active',
        ]);


        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb33'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc1d'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'paxs' => [
                'nombres' => 'Marielle',
                'apellidos' => 'Collins',
                'nro_documento' => '53767236',
                'fecha_nacimiento' => '20-08-1989',
                'sexo' => 'Masculino',
                'region' => 'South Thora',
                'direccion' => '43041 Rath Island Apt. 959East Juwan, RI 87807-0863',
            ],
            'fecha_ingreso' => '1998-10-11',
            'nota_adicionales' => 'Incidunt qui quia qui.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb36'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc1e'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0003'),
            'paxs' => [
                'nombres' => 'Waylon',
                'apellidos' => 'Wiza',
                'nro_documento' => '31110487',
                'fecha_nacimiento' => '05-07-1982',
                'sexo' => 'Masculino',
                'region' => 'East Noemie',
                'direccion' => '154 Schuster CornersSouth Mayrafort, FL 85657-0962',
            ],
            'fecha_ingreso' => '1980-05-07',
            'nota_adicionales' => 'Aspernatur tempore ex similique vero sunt.',
            'estado' => 'active',
        ]);


        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb39'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc1f'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0004'),
            'paxs' => [
                'nombres' => 'Carolyn',
                'apellidos' => 'Bednar',
                'nro_documento' => '40971993',
                'fecha_nacimiento' => '23-05-2004',
                'sexo' => 'Masculino',
                'region' => 'Larsonton',
                'direccion' => '277 Bradtke MissionWest Idell, AR 13066-2223',
            ],
            'fecha_ingreso' => '2019-05-28',
            'nota_adicionales' => 'Vitae consequatur animi voluptates tenetur minus nam vero corrupti.',
            'estado' => 'active',
        ]);


        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb3c'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc20'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0004'),
            'paxs' => [
                'nombres' => 'Peyton',
                'apellidos' => 'Williamson',
                'nro_documento' => '53750436',
                'fecha_nacimiento' => '10-05-1990',
                'sexo' => 'Masculino',
                'region' => 'East Cathrinechester',
                'direccion' => '49662 Hagenes ExtensionsSouth Russellmouth, ME 94765',
            ],
            'fecha_ingreso' => '1982-04-02',
            'nota_adicionales' => 'Ipsam ut eveniet necessitatibus minus porro aut eligendi.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb3f'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc21'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0004'),
            'paxs' => [
                'nombres' => 'Addie',
                'apellidos' => 'Harvey',
                'nro_documento' => '34146350',
                'fecha_nacimiento' => '06-06-2021',
                'sexo' => 'Femenino',
                'region' => 'Lake Orvalchester',
                'direccion' => '7322 Simonis MountainsMaciemouth, ND 02108-3130',
            ],
            'fecha_ingreso' => '2015-10-29',
            'nota_adicionales' => 'Assumenda non et voluptatibus accusamus qui vel.',
            'estado' => 'active',
        ]);


        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb42'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc22'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0004'),
            'paxs' => [
                'nombres' => 'Evert',
                'apellidos' => 'Hegmann',
                'nro_documento' => '38514944',
                'fecha_nacimiento' => '10-04-1989',
                'sexo' => 'Masculino',
                'region' => 'Cleochester',
                'direccion' => '49120 Rempel PikeLeoramouth, WY 17944',
            ],
            'fecha_ingreso' => '2007-09-05',
            'nota_adicionales' => 'Optio quibusdam corporis aliquid minus voluptates.',
            'estado' => 'active',
        ]);

        Checkin::create([
            '_id' => new ObjectId('64a868009639af50d10bfb45'),
            'id_reserva' => new ObjectId('64a85955f1969837920dcc23'),
            'id_recepcionista' => new ObjectId('610e55516c5ce063384c0004'),
            'paxs' => [
                'nombres' => 'Trudie',
                'apellidos' => 'Ernser',
                'nro_documento' => '6423159',
                'fecha_nacimiento' => '27-02-1989',
                'sexo' => 'Masculino',
                'region' => 'Port Rebeca',
                'direccion' => '61740 Jeramy Views Apt. 910Lake Gene, MI 92784',
            ],
            'fecha_ingreso' => '1974-10-30',
            'nota_adicionales' => 'Laborum ut deserunt non.',
            'estado' => 'active',
        ]);
    }
}

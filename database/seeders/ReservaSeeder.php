<?php

namespace Database\Seeders;

use App\Models\Reserva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MongoDB\BSON\ObjectId;


class ReservaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {

        Reserva::create([
            '_id' => new ObjectId('64a715ca0a433436eb0dfed2'),
            "id_huesped" => '610e55516c5ce063389a0001',
            "datosReserva" => [
                "cantidad_dias_reserva" => 10,
                "pax_reserva" => 3,
                "tipo_reserva" => 'Presencial',
                "razon_hospedaje" => 'Trabajo',
                "destinatario_reserva" => 'Para mi',
                "peticiones_adicionales" => null,
                "hora_llegada" => '01:00-02:00',
                "fecha_checkin" => '2023-07-07',
                "fecha_checkout" => "2023-07-09",
                "empresa" => [
                    "ruc_empresa" => "123456789",
                    "razon_social" => "seeder artificial",
                    "direccion_empresa" => 'none'
                ]
            ],
            "id_habitacion" => '64a7117956bbd33ecb0e8422',
            "estado" => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc13'),
            'id_huesped' => '64a8270bdee721af8e0f36b0',
            'datosReserva' => [
                'cantidad_dias_reserva' => '12',
                'pax_reserva' => '5',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Reagan Kilback',
                'peticiones_adicionales' => 'Qui voluptatem ut quia possimus quis quia nulla.',
                'hora_llegada' => '15:32',
                'fecha_checkin' => '1974-08-01',
                'fecha_checkout' => '2018-06-02',
                'empresa' => [
                    'ruc_empresa' => '89769472',
                    'razon_social' => 'Hyatt-Dickens',
                    'direccion_empresa' => '4404 Conn Highway Apt. 133Kundechester, LA 58516-6245',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5392',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc14'),
            'id_huesped' => '64a8270bdee721af8e0f36b3',
            'datosReserva' => [
                'cantidad_dias_reserva' => '12',
                'pax_reserva' => '1',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Mrs. Aliya Leuschke',
                'peticiones_adicionales' => 'Possimus est dignissimos necessitatibus architecto consequatur.',
                'hora_llegada' => '23:46',
                'fecha_checkin' => '2017-09-01',
                'fecha_checkout' => '2022-03-16',
                'empresa' => [
                    'ruc_empresa' => '395299422',
                    'razon_social' => 'Padberg-Gerhold',
                    'direccion_empresa' => '9774 Bill RidgesNew Quinnchester, NE 49888',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5393',
            'estado' => 'Pendiente',

        ]);
        // Cambios sin probar o ver
        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc15'),
            'id_huesped' => '64a8270bdee721af8e0f36b4',
            'datosReserva' => [
                'cantidad_dias_reserva' => '16',
                'pax_reserva' => '2',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Lawson Windler',
                'peticiones_adicionales' => 'Error molestiae similique iure voluptatibus voluptas ut.',
                'hora_llegada' => '20:47',
                'fecha_checkin' => '1974-04-21',
                'fecha_checkout' => '2010-01-30',
                'empresa' => [
                    'ruc_empresa' => '965681317',
                    'razon_social' => 'Willms, Christiansen and Spinka',
                    'direccion_empresa' => '43735 Gust Tunnel Suite 370Port Tiara, MT 34954',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5394',
            'estado' => 'Cancelada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc16'),
            'id_huesped' => '64a8270bdee721af8e0f36b5',
            'datosReserva' => [
                'cantidad_dias_reserva' => '19',
                'pax_reserva' => '5',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Bradly Dibbert',
                'peticiones_adicionales' => 'Cupiditate quas accusantium ad ut.',
                'hora_llegada' => '15:59',
                'fecha_checkin' => '2008-10-01',
                'fecha_checkout' => '2017-07-02',
                'empresa' => [
                    'ruc_empresa' => '740333876',
                    'razon_social' => 'Crona PLC',
                    'direccion_empresa' => '7770 Rippin SummitNorth Hayleeberg, HI 29931-1877',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5395',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc17'),
            'id_huesped' => '64a8270bdee721af8e0f36b6',
            'datosReserva' => [
                'cantidad_dias_reserva' => '10',
                'pax_reserva' => '3',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Maximillian Reilly',
                'peticiones_adicionales' => 'Autem totam illo numquam consequatur doloremque rerum.',
                'hora_llegada' => '05:40',
                'fecha_checkin' => '2016-09-26',
                'fecha_checkout' => '2007-03-10',
                'empresa' => [
                    'ruc_empresa' => '138204249',
                    'razon_social' => 'Carter Inc',
                    'direccion_empresa' => '971 Ward Oval Apt. 341Lake Ignacioton, NM 45076-3856',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5396',
            'estado' => 'Cancelada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc18'),
            'id_huesped' => '64a8270bdee721af8e0f36b7',
            'datosReserva' => [
                'cantidad_dias_reserva' => '3',
                'pax_reserva' => '2',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Nathan McCullough',
                'peticiones_adicionales' => 'Sint eius laborum sit quas.',
                'hora_llegada' => '03:16',
                'fecha_checkin' => '1990-06-29',
                'fecha_checkout' => '1999-01-25',
                'empresa' => [
                    'ruc_empresa' => '252347796',
                    'razon_social' => 'Champlin LLC',
                    'direccion_empresa' => '948 Collins Junction Suite 667Lake Arlene, HI 33666-1593',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5397',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc19'),
            'id_huesped' => '64a8270bdee721af8e0f36b8',
            'datosReserva' => [
                'cantidad_dias_reserva' => '11',
                'pax_reserva' => '1',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Kristy Wunsch',
                'peticiones_adicionales' => 'Nihil laboriosam tenetur dignissimos earum quia soluta amet.',
                'hora_llegada' => '08:16',
                'fecha_checkin' => '1997-10-02',
                'fecha_checkout' => '1997-10-01',
                'empresa' => [
                    'ruc_empresa' => '356251356',
                    'razon_social' => 'Bosco Group',
                    'direccion_empresa' => '46167 Balistreri StationSkyehaven, WI 05304-4721',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5398',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc1a'),
            'id_huesped' => '64a8270bdee721af8e0f36b9',
            'datosReserva' => [
                'cantidad_dias_reserva' => '1',
                'pax_reserva' => '2',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Prof. Willy Gleichner',
                'peticiones_adicionales' => 'Ratione repellat dicta consequatur perspiciatis.',
                'hora_llegada' => '10:43',
                'fecha_checkin' => '1973-11-14',
                'fecha_checkout' => '1997-03-12',
                'empresa' => [
                    'ruc_empresa' => '630845865',
                    'razon_social' => 'Fahey, Koepp and Kozey',
                    'direccion_empresa' => '7520 Joel RoadWest Dorris, WY 02874',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e5399',
            'estado' => 'Cancelada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc1b'),
            'id_huesped' => '64a8270bdee721af8e0f36ba',
            'datosReserva' => [
                'cantidad_dias_reserva' => '17',
                'pax_reserva' => '4',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Brandyn Goyette',
                'peticiones_adicionales' => 'Et qui est ea mollitia quibusdam eveniet ad.',
                'hora_llegada' => '22:12',
                'fecha_checkin' => '2010-05-15',
                'fecha_checkout' => '1974-07-30',
                'empresa' => [
                    'ruc_empresa' => '326237375',
                    'razon_social' => 'Walter, Effertz and Gerhold',
                    'direccion_empresa' => '75772 Hackett ShoreNew Marc, KS 14255',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e539b',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc1c'),
            'id_huesped' => '64a8270bdee721af8e0f36bb',
            'datosReserva' => [
                'cantidad_dias_reserva' => '18',
                'pax_reserva' => '5',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Esther Gaylord I',
                'peticiones_adicionales' => 'Animi molestias vitae explicabo reiciendis.',
                'hora_llegada' => '21:27',
                'fecha_checkin' => '1982-04-11',
                'fecha_checkout' => '1987-04-27',
                'empresa' => [
                    'ruc_empresa' => '631512372',
                    'razon_social' => 'Stark, Cartwright and Lehner',
                    'direccion_empresa' => '46457 Elmore MountainRafaelachester, NC 49006-8418',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e539c',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc1d'),
            'id_huesped' => '64a8270bdee721af8e0f36bc',
            'datosReserva' => [
                'cantidad_dias_reserva' => '18',
                'pax_reserva' => '4',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Prof. Desmond Waters DDS',
                'peticiones_adicionales' => 'Omnis officia quod iste necessitatibus est officiis.',
                'hora_llegada' => '17:21',
                'fecha_checkin' => '2018-04-23',
                'fecha_checkout' => '1984-07-31',
                'empresa' => [
                    'ruc_empresa' => '756458438',
                    'razon_social' => 'Padberg-Koepp',
                    'direccion_empresa' => '8192 Schamberger Spur Apt. 771Sheldonhaven, MS 85441-5516',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e539d',
            'estado' => 'Aprobada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc1e'),
            'id_huesped' => '64a8270bdee721af8e0f36bd',
            'datosReserva' => [
                'cantidad_dias_reserva' => '20',
                'pax_reserva' => '3',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Phyllis Padberg',
                'peticiones_adicionales' => 'Itaque doloribus eius sed ipsa quis temporibus.',
                'hora_llegada' => '12:26',
                'fecha_checkin' => '2014-07-13',
                'fecha_checkout' => '2005-08-16',
                'empresa' => [
                    'ruc_empresa' => '578806637',
                    'razon_social' => 'Hodkiewicz-Ondricka',
                    'direccion_empresa' => '45414 Bertrand MewsStrackestad, HI 94961',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e539e',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc1f'),
            'id_huesped' => '64a8270bdee721af8e0f36be',
            'datosReserva' => [
                'cantidad_dias_reserva' => '5',
                'pax_reserva' => '3',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Stanley Parisian',
                'peticiones_adicionales' => 'Adipisci qui officiis magni aut corrupti cumque velit.',
                'hora_llegada' => '11:56',
                'fecha_checkin' => '1994-04-29',
                'fecha_checkout' => '1994-06-25',
                'empresa' => [
                    'ruc_empresa' => '990024059',
                    'razon_social' => 'O\'Reilly PLC',
                    'direccion_empresa' => '9545 Wiza Station Apt. 014Lake Gaston, AK 67576-7932',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e539f',
            'estado' => 'Cancelada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc20'),
            'id_huesped' => '64a8270bdee721af8e0f36bf',
            'datosReserva' => [
                'cantidad_dias_reserva' => '4',
                'pax_reserva' => '2',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Catalina Beahan',
                'peticiones_adicionales' => 'Architecto repellat officia omnis.',
                'hora_llegada' => '10:05',
                'fecha_checkin' => '1992-10-13',
                'fecha_checkout' => '1999-04-14',
                'empresa' => [
                    'ruc_empresa' => '740350444',
                    'razon_social' => 'Davis PLC',
                    'direccion_empresa' => '7786 Connelly SummitSouth Brendonmouth, MO 87326',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e53a0',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc21'),
            'id_huesped' => '64a8270bdee721af8e0f36c0',
            'datosReserva' => [
                'cantidad_dias_reserva' => '15',
                'pax_reserva' => '2',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Lauren Harris',
                'peticiones_adicionales' => 'Dolor repellat quia doloribus dolor qui accusamus ducimus.',
                'hora_llegada' => '15:52',
                'fecha_checkin' => '2020-10-31',
                'fecha_checkout' => '2018-12-01',
                'empresa' => [
                    'ruc_empresa' => '929998337',
                    'razon_social' => 'Daugherty, Altenwerth and Kirlin',
                    'direccion_empresa' => '7547 Orn CourtLake Marcelleburgh, OH 48158-9465',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e53a1',
            'estado' => 'Aprobada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc22'),
            'id_huesped' => '64a8270bdee721af8e0f36c1',
            'datosReserva' => [
                'cantidad_dias_reserva' => '1',
                'pax_reserva' => '3',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Pearl Moore',
                'peticiones_adicionales' => 'Laborum qui ex ullam corporis quo qui esse.',
                'hora_llegada' => '12:29',
                'fecha_checkin' => '2003-04-30',
                'fecha_checkout' => '2007-01-02',
                'empresa' => [
                    'ruc_empresa' => '576251964',
                    'razon_social' => 'Goyette-Casper',
                    'direccion_empresa' => '8221 Jacobson WaysSouth Marcelluschester, RI 27324-9598',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e53a2',
            'estado' => 'Pendiente',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc23'),
            'id_huesped' => '64a8270bdee721af8e0f36c2',
            'datosReserva' => [
                'cantidad_dias_reserva' => '1',
                'pax_reserva' => '3',
                'tipo_reserva' => 'Online',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Phoebe Tremblay Sr.',
                'peticiones_adicionales' => 'Hic consequatur aut quia qui et est eos.',
                'hora_llegada' => '03:17',
                'fecha_checkin' => '1986-08-30',
                'fecha_checkout' => '1977-03-19',
                'empresa' => [
                    'ruc_empresa' => '789865575',
                    'razon_social' => 'Stroman, Schmeler and Schroeder',
                    'direccion_empresa' => '404 Zula Estates Apt. 687Kiehnborough, AK 49634-8196',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e53a3',
            'estado' => 'Aprobada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc24'),
            'id_huesped' => '64a8270bdee721af8e0f36c3',
            'datosReserva' => [
                'cantidad_dias_reserva' => '10',
                'pax_reserva' => '4',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Marge Auer Jr.',
                'peticiones_adicionales' => 'Qui repellendus animi nulla autem.',
                'hora_llegada' => '16:38',
                'fecha_checkin' => '2003-02-25',
                'fecha_checkout' => '2012-07-15',
                'empresa' => [
                    'ruc_empresa' => '128451300',
                    'razon_social' => 'Wolff-Ruecker',
                    'direccion_empresa' => '21430 Harris Row Apt. 828West Ana, WV 52240-8099',
                ],
            ],
            'id_habitacion' => '64a7121d4f0935922b0e53a4',
            'estado' => 'Cancelada',

        ]);


        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc25'),
            'id_huesped' => '64a8270bdee721af8e0f36c4',
            'datosReserva' => [
                'cantidad_dias_reserva' => '14',
                'pax_reserva' => '5',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Jermey Parisian',
                'peticiones_adicionales' => 'Vel dolor labore reiciendis qui rerum sit.',
                'hora_llegada' => '09:43',
                'fecha_checkin' => '2015-04-29',
                'fecha_checkout' => '1996-03-10',
                'empresa' => [
                    'ruc_empresa' => '732712337',
                    'razon_social' => 'Torphy-Kirlin',
                    'direccion_empresa' => '13037 Gaylord Expressway Apt. 478Port Catherine, WV 63152-8745',
                ],
            ],
            'id_habitacion' => '64a713e310f1781b210ef8d2',
            'estado' => 'Cancelada',

        ]);


        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc26'),
            'id_huesped' => '64a8270bdee721af8e0f36c5',
            'datosReserva' => [
                'cantidad_dias_reserva' => '18',
                'pax_reserva' => '4',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Trabajo',
                'destinatario_reserva' => 'Prof. Durward Hermiston DDS',
                'peticiones_adicionales' => 'Aliquam consequatur iste beatae.',
                'hora_llegada' => '08:29',
                'fecha_checkin' => '2020-02-13',
                'fecha_checkout' => '1973-11-21',
                'empresa' => [
                    'ruc_empresa' => '833651096',
                    'razon_social' => 'Lueilwitz, Keeling and Rippin',
                    'direccion_empresa' => '71595 Maggio Place Suite 223Berneiceburgh, SD 74615',
                ],
            ],
            'id_habitacion' => '64a713e310f1781b210ef8d3',
            'estado' => 'Cancelada',

        ]);

        Reserva::create([
            '_id' => new ObjectId('64a85955f1969837920dcc27'),
            'id_huesped' => '64a8270bdee721af8e0f36c6',
            'datosReserva' => [
                'cantidad_dias_reserva' => '11',
                'pax_reserva' => '5',
                'tipo_reserva' => 'Presencial',
                'razon_hospedaje' => 'Vacaciones',
                'destinatario_reserva' => 'Modesta Prohaska DVM',
                'peticiones_adicionales' => 'Autem dicta eveniet quo aut aut cupiditate nostrum.',
                'hora_llegada' => '08:49',
                'fecha_checkin' => '1987-12-20',
                'fecha_checkout' => '2003-05-23',
                'empresa' => [
                    'ruc_empresa' => '915838218',
                    'razon_social' => 'Dare-Muller',
                    'direccion_empresa' => '771 Hilpert PlazaNitzscheland, LA 23570-1064',
                ],
            ],
            'id_habitacion' => '64a713e310f1781b210ef8d4',
            'estado' => 'Cancelada',

        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Huesped;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use MongoDB\BSON\ObjectId;



class HuespedSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Huesped::create([
            '_id' => new ObjectId('610e55516c5ce063389a0001'),
            "identificacion" => [
                "tipo_identificacion" => "Dni",
                "identificacion_huesped" => "12345678"
            ],
            "nombres" => "Juan",
            "apellidos" => "Pérez",
            "sexo" => "Masculino",
            "fecha_nacimiento" => "1990-01-01",
            "nacionalidad" => "Peruana",
            "region" => "Lima",
            "direccion" => "Calle Principal 123",
            "telefono" => "987654321",
            "correo" => "juan@example.com",
            "empresa" => [
                "nombre_empresa" => "ACME Inc.",
                "ruc_empresa" => "12345678901",
                "razon_social" => "ACME Corporation",
                "direccion_empresa" => "Av. Principal 456"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b0'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '79970192'
            ],
            'nombres' => 'Aidan',
            'apellidos' => 'Crist',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1977-09-21',
            'nacionalidad' => 'Liechtenstein',
            'region' => 'Friedrichton',
            'direccion' => "14935 Bins Harbors\nSerenitymouth, DE 10956-9618",
            'telefono' => '1-802-346-8680',
            'correo' => 'citlalli34@welch.com',
            'empresa' => [
                'nombre_empresa' => 'Kub, Brakus and Tromp',
                'ruc_empresa' => '78471328169',
                'razon_social' => 'Predovic-Hoeger',
                'direccion_empresa' => "2058 Kling Mills Suite 496\nLake Israelchester, ME 39054"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b3'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '10205852'
            ],
            'nombres' => 'Alvis',
            'apellidos' => 'Collier',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2005-03-16',
            'nacionalidad' => 'Sweden',
            'region' => 'South Asaland',
            'direccion' => "6884 Dietrich Harbor\nNicolasland, MN 38073",
            'telefono' => '726.762.7315',
            'correo' => 'nicklaus.luettgen@gmail.com',
            'empresa' => [
                'nombre_empresa' => 'Fisher, Muller and Tillman',
                'ruc_empresa' => '49882596463',
                'razon_social' => 'Ullrich, Gusikowski and Padberg',
                'direccion_empresa' => "193 Mae Manors Apt. 039\nRickeystad, AR 83526"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b4'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '48666076'
            ],
            'nombres' => 'Margarita',
            'apellidos' => 'Smith',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1979-09-04',
            'nacionalidad' => 'Albania',
            'region' => 'Rosemarieshire',
            'direccion' => "64723 Romaine Parkways\nHalvorsonton, OH 00053-0243",
            'telefono' => '(937) 618-5925',
            'correo' => 'alexanne.schultz@fritsch.info',
            'empresa' => [
                'nombre_empresa' => 'Corkery PLC',
                'ruc_empresa' => '88932495847',
                'razon_social' => 'Mante, Schiller and Thiel',
                'direccion_empresa' => "551 Blake Ports Suite 142\nHeidenreichmouth, MA 80805"
            ]
        ]);
        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b5'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '61071752'
            ],
            'nombres' => 'Lulu',
            'apellidos' => 'Hoeger',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1988-11-25',
            'nacionalidad' => 'Austria',
            'region' => 'Jarretfurt',
            'direccion' => "45922 Brock Circle Apt. 903\nNorth Teresafort, KY 48334-7715",
            'telefono' => '1-743-389-9193',
            'correo' => 'funk.aylin@schowalter.com',
            'empresa' => [
                'nombre_empresa' => 'Mertz Inc',
                'ruc_empresa' => '24090596668',
                'razon_social' => 'Ledner-Schulist',
                'direccion_empresa' => "714 Katrine Fords\nSchoenville, CT 70754"
            ]
        ]);
        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b6'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '67618773'
            ],
            'nombres' => 'Eden',
            'apellidos' => 'Harris',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1973-05-27',
            'nacionalidad' => 'Ethiopia',
            'region' => 'South Queenie',
            'direccion' => "8048 Pacocha Falls Apt. 783\nLake Aubree, WI 47555-9776",
            'telefono' => '+1 (838) 465-4269',
            'correo' => 'lang.miguel@heaney.com',
            'empresa' => [
                'nombre_empresa' => 'Smith-Reinger',
                'ruc_empresa' => '65913600114',
                'razon_social' => 'Koepp LLC',
                'direccion_empresa' => "332 Boyle Squares Apt. 032\nSouth Sybleburgh, DE 41887"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b7'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '62712919'
            ],
            'nombres' => 'Letha',
            'apellidos' => 'Grant',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2000-05-28',
            'nacionalidad' => 'Bulgaria',
            'region' => 'Bernieport',
            'direccion' => "249 Bayer Fall Suite 335\nEast Ernestinaview, WY 58985",
            'telefono' => '(303) 240-8178',
            'correo' => 'dell.balistreri@ritchie.info',
            'empresa' => [
                'nombre_empresa' => 'Hagenes-Hudson',
                'ruc_empresa' => '10960603810',
                'razon_social' => 'Schamberger-Price',
                'direccion_empresa' => "30836 Kutch Junctions\nBartellfort, IL 96999-8023"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b8'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '88432523'
            ],
            'nombres' => 'Lizeth',
            'apellidos' => 'Wiegand',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2007-06-28',
            'nacionalidad' => 'United States of America',
            'region' => 'Carlosville',
            'direccion' => "975 Ledner Walk\nYostberg, LA 42801-8685",
            'telefono' => '1-571-883-5936',
            'correo' => 'verdie.lemke@ruecker.biz',
            'empresa' => [
                'nombre_empresa' => 'Muller, Nikolaus and Raynor',
                'ruc_empresa' => '99580734663',
                'razon_social' => 'Feeney LLC',
                'direccion_empresa' => "7987 Rolando Port Apt. 779\nGradyburgh, ME 09408"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36b9'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '40491033'
            ],
            'nombres' => 'Ruthie',
            'apellidos' => 'Jast',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2009-02-02',
            'nacionalidad' => 'Israel',
            'region' => 'West Madelynfurt',
            'direccion' => "5918 Julie Brook Apt. 108\nEast Kolbyland, PA 30634",
            'telefono' => '(253) 728-5845',
            'correo' => 'katherine00@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Smith, Jast and Runolfsdottir',
                'ruc_empresa' => '61050825921',
                'razon_social' => 'Kub-White',
                'direccion_empresa' => "4312 Hand Springs Suite 298\nNew Helene, CA 02333-3455"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36ba'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '65830309'
            ],
            'nombres' => 'Roderick',
            'apellidos' => 'Cremin',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '2001-10-03',
            'nacionalidad' => 'Ecuador',
            'region' => 'North Isaias',
            'direccion' => "24181 Donnie Lights Suite 420\nBalistreriport, KY 86054-3004",
            'telefono' => '+1.754.866.8363',
            'correo' => 'adrian.moen@ankunding.com',
            'empresa' => [
                'nombre_empresa' => 'Greenfelder and Sons',
                'ruc_empresa' => '91649594910',
                'razon_social' => 'Abbott, Brakus and Dare',
                'direccion_empresa' => "5204 Moore Cove\nHagenesstad, CO 86312-7835"
            ]
        ]);
        // 11
         Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36bb'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '62183702'
            ],
            'nombres' => 'Deondre',
            'apellidos' => 'Barton',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1970-08-07',
            'nacionalidad' => 'Ghana',
            'region' => 'New Mohamed',
            'direccion' => "953 Austen Branch\nEast Shanelle, LA 23493-8152",
            'telefono' => '+1-915-454-3835',
            'correo' => 'leuschke.florian@hintz.com',
            'empresa' => [
                'nombre_empresa' => 'Bednar, Bayer and Hartmann',
                'ruc_empresa' => '82447752988',
                'razon_social' => 'Stark Inc',
                'direccion_empresa' => "997 Shaniya Shores Apt. 686\nWest Amelyfort, MA 98063"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36bc'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '59891160'
            ],
            'nombres' => 'Berneice',
            'apellidos' => 'Gleason',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1999-09-15',
            'nacionalidad' => 'Zimbabwe',
            'region' => 'North Allan',
            'direccion' => "631 Donnelly Rapid\nSouth Kylerville, NM 16936",
            'telefono' => '(641) 566-2177',
            'correo' => 'katheryn.hayes@hodkiewicz.net',
            'empresa' => [
                'nombre_empresa' => 'Murphy-Harvey',
                'ruc_empresa' => '73535835085',
                'razon_social' => 'Crist-Keebler',
                'direccion_empresa' => "99216 Rory Ways\nLake Arvidshire, NY 95654"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36bd'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '28013984'
            ],
            'nombres' => 'Anissa',
            'apellidos' => 'Gulgowski',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1973-06-01',
            'nacionalidad' => 'China',
            'region' => 'McGlynnside',
            'direccion' => "32211 Isadore Knoll\nSouth Lonnieton, SC 99280",
            'telefono' => '1-330-719-2546',
            'correo' => 'carroll.denis@gerhold.com',
            'empresa' => [
                'nombre_empresa' => 'Rice LLC',
                'ruc_empresa' => '13666056076',
                'razon_social' => 'Marvin, Huels and Baumbach',
                'direccion_empresa' => "973 Ebert Burg Suite 158\nNorth Evantown, MD 00159-8680"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36be'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '46908144'
            ],
            'nombres' => 'Lia',
            'apellidos' => 'Stracke',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1989-03-20',
            'nacionalidad' => 'Philippines',
            'region' => 'New Dante',
            'direccion' => "65578 Jerde Walk\nNew Hendersonville, WA 61348",
            'telefono' => '681-596-6292',
            'correo' => 'zoey.watsica@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Torp, Lesch and Pouros',
                'ruc_empresa' => '28981288682',
                'razon_social' => 'Hammes-Larson',
                'direccion_empresa' => "3422 Chase Extension Apt. 942\nKuphalshire, MO 00048-8224"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36bf'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '21004843'
            ],
            'nombres' => 'Myrtis',
            'apellidos' => 'Wilkinson',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '2016-01-04',
            'nacionalidad' => 'Mongolia',
            'region' => 'Karolannburgh',
            'direccion' => "4998 Berge Forks\nEast Maudberg, MS 98199-3073",
            'telefono' => '484.785.0355',
            'correo' => 'eichmann.beulah@klocko.net',
            'empresa' => [
                'nombre_empresa' => 'Bergstrom-Herzog',
                'ruc_empresa' => '23033036517',
                'razon_social' => 'Feeney-Breitenberg',
                'direccion_empresa' => "312 Adeline Garden Suite 632\nNew Destinton, RI 66142"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c0'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '69145918'
            ],
            'nombres' => 'Orlo',
            'apellidos' => 'Hodkiewicz',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1971-08-30',
            'nacionalidad' => 'Eritrea',
            'region' => 'Oberbrunnerstad',
            'direccion' => "5508 King Summit Suite 116\nNew Paris, OR 65028",
            'telefono' => '(934) 635-0341',
            'correo' => 'darrel45@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Lueilwitz-McKenzie',
                'ruc_empresa' => '60038370670',
                'razon_social' => 'Pollich PLC',
                'direccion_empresa' => "7817 Jordon Gateway\nEast Lilianburgh, MA 57292"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c1'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '54161729'
            ],
            'nombres' => 'Aron',
            'apellidos' => 'Marks',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1995-07-29',
            'nacionalidad' => 'Poland',
            'region' => 'South Tylerhaven',
            'direccion' => "9549 Lockman Manor Apt. 804\nEast Finnside, MN 29295-6762",
            'telefono' => '+1 (928) 339-9968',
            'correo' => 'robin.schneider@gottlieb.com',
            'empresa' => [
                'nombre_empresa' => 'Bosco-Tillman',
                'ruc_empresa' => '92471164999',
                'razon_social' => 'Blanda Group',
                'direccion_empresa' => "36798 Jason Causeway\nSouth Fernefurt, WA 50924"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c2'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '11182265'
            ],
            'nombres' => 'Olin',
            'apellidos' => 'Ullrich',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1993-10-22',
            'nacionalidad' => 'Palestinian Territories',
            'region' => 'New Kirk',
            'direccion' => "7190 Albert Centers\nNorth Rylee, TN 74046",
            'telefono' => '1-603-545-9419',
            'correo' => 'sammie.cruickshank@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Dicki, Cassin and Bernhard',
                'ruc_empresa' => '94865924686',
                'razon_social' => 'Conn PLC',
                'direccion_empresa' => "6124 Emard Locks Apt. 602\nKoelpinland, MS 72741"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c3'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '96946314'
            ],
            'nombres' => 'Aurelie',
            'apellidos' => 'Hauck',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1991-10-09',
            'nacionalidad' => 'China',
            'region' => 'New Elizaville',
            'direccion' => "432 Estella Mall\nLake Waino, ND 78350-8293",
            'telefono' => '+1-720-749-9369',
            'correo' => 'montana.hodkiewicz@roob.com',
            'empresa' => [
                'nombre_empresa' => 'Veum, O\'Reilly and Gislason',
                'ruc_empresa' => '63470581642',
                'razon_social' => 'Bayer and Sons',
                'direccion_empresa' => "39259 Corwin Terrace\nWest Aliville, NM 99854-4645"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c4'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '22740178'
            ],
            'nombres' => 'Wellington',
            'apellidos' => 'Bailey',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1995-01-28',
            'nacionalidad' => 'Anguilla',
            'region' => 'Chanelleshire',
            'direccion' => "7995 Demarcus Center\nImmanuelfurt, TX 59526",
            'telefono' => '(270) 352-0320',
            'correo' => 'jamel56@gerhold.com',
            'empresa' => [
                'nombre_empresa' => 'Jast-Quitzon',
                'ruc_empresa' => '24272784354',
                'razon_social' => 'Heller Inc',
                'direccion_empresa' => "88693 Cummings Landing Suite 497\nSwaniawskiborough, ME 07867"
            ]
        ]);
        //21
        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c5'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '14983113'
            ],
            'nombres' => 'Verdie',
            'apellidos' => 'Jakubowski',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1979-10-04',
            'nacionalidad' => 'Netherlands Antilles',
            'region' => 'New Kian',
            'direccion' => "3624 Turcotte Stream\nEmmieberg, GA 69419",
            'telefono' => '(352) 770-0420',
            'correo' => 'rabbott@mcclure.com',
            'empresa' => [
                'nombre_empresa' => 'Casper, Waelchi and Walsh',
                'ruc_empresa' => '15032458473',
                'razon_social' => 'Flatley, Carroll and Johnston',
                'direccion_empresa' => "85616 Hugh Summit\nSouth Kirstenfort, MI 31638-9962"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c6'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '41940130'
            ],
            'nombres' => 'Candida',
            'apellidos' => 'Purdy',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2004-08-14',
            'nacionalidad' => 'Macao',
            'region' => 'Karelleland',
            'direccion' => "46521 Marge Corners Apt. 558\nReichelfurt, TN 15350-4124",
            'telefono' => '1-302-867-9879',
            'correo' => 'nrunte@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Purdy Inc',
                'ruc_empresa' => '94760733341',
                'razon_social' => 'Nitzsche, Harvey and Herzog',
                'direccion_empresa' => "3513 Dallin Meadow\nEast Price, WI 90712"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c7'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '44602576'
            ],
            'nombres' => 'Juana',
            'apellidos' => 'Armstrong',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1981-09-01',
            'nacionalidad' => 'Palau',
            'region' => 'New Stefanieburgh',
            'direccion' => "96779 Santina Crossing Apt. 769\nEast Baileychester, NM 19947",
            'telefono' => '+1-918-816-1596',
            'correo' => 'lorna47@hahn.com',
            'empresa' => [
                'nombre_empresa' => 'Smith, Orn and Langworth',
                'ruc_empresa' => '85786068101',
                'razon_social' => 'Hahn Ltd',
                'direccion_empresa' => "5882 Mraz Underpass\nBlockport, TX 06403"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c8'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '11397483'
            ],
            'nombres' => 'Ayden',
            'apellidos' => 'Zboncak',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1975-02-23',
            'nacionalidad' => 'Micronesia',
            'region' => "O'Reillybury",
            'direccion' => "7301 Haag Ranch Suite 284\nPort Shanelhaven, NY 33213-2443",
            'telefono' => '+1.352.391.0602',
            'correo' => 'thagenes@gmail.com',
            'empresa' => [
                'nombre_empresa' => 'Toy, Mraz and Simonis',
                'ruc_empresa' => '84607871699',
                'razon_social' => 'Lockman-Jacobson',
                'direccion_empresa' => "9276 Mathias Manors Suite 022\nKristinachester, IN 45730-2741"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36c9'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '52401278'
            ],
            'nombres' => 'Dallin',
            'apellidos' => 'Fisher',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1977-07-06',
            'nacionalidad' => 'United States Minor Outlying Islands',
            'region' => 'Willton',
            'direccion' => "75651 Yadira Field Suite 033\nKundefurt, CO 45427-5035",
            'telefono' => '+1 (352) 533-7737',
            'correo' => 'hansen.ronaldo@kiehn.com',
            'empresa' => [
                'nombre_empresa' => 'Larson-Stiedemann',
                'ruc_empresa' => '59015487545',
                'razon_social' => 'Larson-Kunde',
                'direccion_empresa' => "590 Weimann Stravenue\nWest Barbara, MS 29940-8642"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36ca'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '72727884'
            ],
            'nombres' => 'Louisa',
            'apellidos' => 'Champlin',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2007-12-22',
            'nacionalidad' => 'Somalia',
            'region' => 'Dachmouth',
            'direccion' => "26466 Hosea Drives Apt. 904\nEast Fausto, DE 28838-2084",
            'telefono' => '+1-458-679-6989',
            'correo' => 'kacie28@yahoo.com',
            'empresa' => [
                'nombre_empresa' => 'Marvin, Johns and Kozey',
                'ruc_empresa' => '38993737218',
                'razon_social' => 'Rau-Hamill',
                'direccion_empresa' => "349 Torphy Mountain Suite 233\nKalebfurt, MS 46712"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36cb'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '32452961'
            ],
            'nombres' => 'Corine',
            'apellidos' => 'Pouros',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '2003-12-13',
            'nacionalidad' => 'Sierra Leone',
            'region' => 'North Cordellville',
            'direccion' => "776 Carlos Fort\nQuitzonfort, AZ 60955-0151",
            'telefono' => '+1-307-839-3285',
            'correo' => 'isabella.walker@wintheiser.net',
            'empresa' => [
                'nombre_empresa' => "O'Hara-Crona",
                'ruc_empresa' => '51424347005',
                'razon_social' => 'Moen-Herzog',
                'direccion_empresa' => "215 Crystel Gardens\nWildermanborough, MD 04281-2280"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36cc'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '56046102'
            ],
            'nombres' => 'Sandy',
            'apellidos' => 'Gibson',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1982-12-24',
            'nacionalidad' => 'Netherlands Antilles',
            'region' => 'Ryleighhaven',
            'direccion' => "48097 Reva Mall\nPacochastad, ID 30026-1524",
            'telefono' => '458.532.8766',
            'correo' => 'samir.gerlach@wolff.com',
            'empresa' => [
                'nombre_empresa' => 'Hirthe, Homenick and Howell',
                'ruc_empresa' => '39869974310',
                'razon_social' => 'Murray Group',
                'direccion_empresa' => "998 Mertz Manors\nSouth Bretttown, MN 76013-9984"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36cd'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '37386318'
            ],
            'nombres' => 'Myah',
            'apellidos' => 'Fahey',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1993-08-12',
            'nacionalidad' => 'Western Sahara',
            'region' => 'West Colbyview',
            'direccion' => "31732 Larson Overpass Apt. 429\nBechtelarchester, FL 19542",
            'telefono' => '(562) 201-9522',
            'correo' => 'fkuhlman@kunze.com',
            'empresa' => [
                'nombre_empresa' => 'Beer PLC',
                'ruc_empresa' => '45030125406',
                'razon_social' => 'Considine PLC',
                'direccion_empresa' => "6823 Paucek Lake Suite 418\nRebecaport, MN 25972-4664"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36ce'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '23521799'
            ],
            'nombres' => 'Rozella',
            'apellidos' => 'Hackett',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1992-09-14',
            'nacionalidad' => 'Monaco',
            'region' => 'Swiftport',
            'direccion' => "360 Della Coves Suite 405\nEast Marleneborough, NJ 89314-6708",
            'telefono' => '859.533.1884',
            'correo' => 'zgrimes@purdy.net',
            'empresa' => [
                'nombre_empresa' => 'Johnston-Reichert',
                'ruc_empresa' => '23767896820',
                'razon_social' => 'Koss Group',
                'direccion_empresa' => "42895 Schaefer Curve Suite 432\nSouth Nicola, ME 92118"
            ]
        ]);
 //31
         Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36cf'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '36430724'
            ],
            'nombres' => 'Marcelina',
            'apellidos' => 'Flatley',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1970-10-12',
            'nacionalidad' => 'Indonesia',
            'region' => 'Raheemside',
            'direccion' => "70010 Modesta Run Apt. 085\nMarilieland, ME 92167",
            'telefono' => '+1-281-787-0964',
            'correo' => 'desmond.rath@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Littel PLC',
                'ruc_empresa' => '20938349802',
                'razon_social' => 'Runolfsdottir, Block and Schimmel',
                'direccion_empresa' => "71205 Ladarius Well\nFreidamouth, LA 47365"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d0'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '72821078'
            ],
            'nombres' => 'Maude',
            'apellidos' => 'Gaylord',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1979-02-10',
            'nacionalidad' => 'Saint Pierre and Miquelon',
            'region' => 'Patriciashire',
            'direccion' => "87185 Wunsch Forest\nHettingerport, HI 45153-0753",
            'telefono' => '+1 (615) 412-7980',
            'correo' => 'dubuque.kenya@macejkovic.net',
            'empresa' => [
                'nombre_empresa' => 'Klocko, Hackett and Christiansen',
                'ruc_empresa' => '84850237556',
                'razon_social' => 'Huels, Kunze and Ullrich',
                'direccion_empresa' => "931 Huel Square\nBoyerfort, TX 11995"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d1'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '46537837'
            ],
            'nombres' => 'Adeline',
            'apellidos' => 'Marks',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1982-05-06',
            'nacionalidad' => 'Indonesia',
            'region' => 'Pollichfurt',
            'direccion' => "43126 Joseph Prairie\nLake Keshaunland, CT 98732",
            'telefono' => '+1-364-531-1311',
            'correo' => 'karina88@yahoo.com',
            'empresa' => [
                'nombre_empresa' => 'Zemlak PLC',
                'ruc_empresa' => '87243440878',
                'razon_social' => 'Torp Inc',
                'direccion_empresa' => "41451 Harber Mountain Apt. 271\nSouth Loren, WI 27608-5033"
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d2'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '68838980'
            ],
            'nombres' => 'Elvie',
            'apellidos' => 'Borer',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2011-05-22',
            'nacionalidad' => 'Nicaragua',
            'region' => 'South Karianne',
            'direccion' => "54257 Schinner Lakes Apt. 782\nStammberg, AK 44789",
            'telefono' => '321.257.0375',
            'correo' => 'rwilderman@nienow.org',
            'empresa' => [
                'nombre_empresa' => 'Pacocha-Nader',
                'ruc_empresa' => '33892967756',
                'razon_social' => 'Paucek-Metz',
                'direccion_empresa' => "4799 Rolfson Lake Apt. 380\nLake Billy, KS 06870"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d3'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '50209973'
            ],
            'nombres' => 'Marisol',
            'apellidos' => 'Rowe',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '2014-04-02',
            'nacionalidad' => 'Armenia',
            'region' => 'Port Rey',
            'direccion' => "33834 D'Amore Harbor Apt. 072\nWest Janiyamouth, WY 91571-9786",
            'telefono' => '(725) 445-3851',
            'correo' => 'owen.pacocha@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Padberg, Breitenberg and Gleichner',
                'ruc_empresa' => '77454409280',
                'razon_social' => 'Langworth PLC',
                'direccion_empresa' => "421 Lloyd Mission\nSouth Yesenia, OK 27975"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d4'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '40955136'
            ],
            'nombres' => 'Maximus',
            'apellidos' => 'Goodwin',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1975-06-12',
            'nacionalidad' => 'Luxembourg',
            'region' => 'Nadermouth',
            'direccion' => "1173 Ansel Squares Apt. 216\nKingshire, KY 31443-0608",
            'telefono' => '+1-458-545-1850',
            'correo' => 'quitzon.freddy@hotmail.com',
            'empresa' => [
                'nombre_empresa' => 'Larkin-Wolff',
                'ruc_empresa' => '26018965497',
                'razon_social' => "Bins, O'Keefe and Littel",
                'direccion_empresa' => "94903 Carley Station\nArdellastad, ID 85876-7405"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d5'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '66235515'
            ],
            'nombres' => 'Nathan',
            'apellidos' => 'Jakubowski',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '2012-05-17',
            'nacionalidad' => 'Romania',
            'region' => 'Jaquelinemouth',
            'direccion' => "1435 Skylar Tunnel\nBethshire, MT 82541",
            'telefono' => '+12838085850',
            'correo' => 'dejuan90@gmail.com',
            'empresa' => [
                'nombre_empresa' => 'Lynch, Pagac and Langworth',
                'ruc_empresa' => '53722020876',
                'razon_social' => 'Kunde, Streich and Rutherford',
                'direccion_empresa' => "670 O'Keefe Turnpike\nMatildemouth, OK 00878-8841"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d6'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '29012786'
            ],
            'nombres' => 'Phoebe',
            'apellidos' => 'Stokes',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1972-03-14',
            'nacionalidad' => 'Brunei Darussalam',
            'region' => 'Boehmview',
            'direccion' => "6824 Emma Motorway\nNew Cadenmouth, GA 66895",
            'telefono' => '1-954-778-2728',
            'correo' => 'oconner.macey@morissette.com',
            'empresa' => [
                'nombre_empresa' => 'Auer, Dickinson and Runte',
                'ruc_empresa' => '85276221847',
                'razon_social' => 'Kertzmann, Moen and Dach',
                'direccion_empresa' => '473 Muller Mall\nWest Nedraton, GA 48064'
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d7'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '61866426'
            ],
            'nombres' => 'Eloisa',
            'apellidos' => 'Windler',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1973-10-14',
            'nacionalidad' => 'Bolivia',
            'region' => 'Treutelville',
            'direccion' => "4623 Winston Via Apt. 083\nMabellefort, CT 19529",
            'telefono' => '820.625.1808',
            'correo' => 'isabel.boehm@pouros.com',
            'empresa' => [
                'nombre_empresa' => 'Kshlerin, Ryan and McDermott',
                'ruc_empresa' => '89438496453',
                'razon_social' => 'Cole, Toy and Greenfelder',
                'direccion_empresa' => "126 Lynch Square Apt. 552\nNoelbury, MI 49699"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d8'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '74113976'
            ],
            'nombres' => 'Arianna',
            'apellidos' => 'Price',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1994-04-25',
            'nacionalidad' => 'Croatia',
            'region' => 'Hansenchester',
            'direccion' => "91901 Kaelyn Road\nSouth Jovanibury, OH 73598",
            'telefono' => '+1 (530) 794-3116',
            'correo' => 'wilderman.reginald@fritsch.biz',
            'empresa' => [
                'nombre_empresa' => 'Terry LLC',
                'ruc_empresa' => '72136211576',
                'razon_social' => 'Weimann-Lind',
                'direccion_empresa' => "72331 Bahringer Street Suite 238\nMetzmouth, TN 68456-2506"
            ],
        ]);
//41
         Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36d9'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '28641211'
            ],
            'nombres' => 'Irwin',
            'apellidos' => 'Fay',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '2022-09-23',
            'nacionalidad' => 'Bolivia',
            'region' => 'Schinnerstad',
            'direccion' => "29100 Wisoky Course\nMargaritaborough, DC 17873-1414",
            'telefono' => '+16516823193',
            'correo' => 'craynor@yahoo.com',
            'empresa' => [
                'nombre_empresa' => 'Rolfson Ltd',
                'ruc_empresa' => '13255954558',
                'razon_social' => 'King-Rosenbaum',
                'direccion_empresa' => "104 Balistreri Run\nJosetown, LA 14320-2028"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36da'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '70502096'
            ],
            'nombres' => 'Frederick',
            'apellidos' => 'Kunde',
            'sexo' => 'Femenino',
            'fecha_nacimiento' => '1998-04-02',
            'nacionalidad' => 'San Marino',
            'region' => 'North Tod',
            'direccion' => "555 Mauricio Springs Suite 763\nSouth Kyleigh, LA 47364-7313",
            'telefono' => '1-520-201-9387',
            'correo' => 'stewart26@gmail.com',
            'empresa' => [
                'nombre_empresa' => 'DuBuque-Hyatt',
                'ruc_empresa' => '18478320284',
                'razon_social' => 'Aufderhar-Collins',
                'direccion_empresa' => "95536 Colt Inlet\nJessieland, AR 59031"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36db'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '19812125'
            ],
            'nombres' => 'Stacey',
            'apellidos' => "O'Conner",
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2007-01-25',
            'nacionalidad' => 'Czech Republic',
            'region' => 'Lake Clarissa',
            'direccion' => "83796 Schmitt Squares Apt. 048\nPort Trinityhaven, IL 63495-3054",
            'telefono' => '1-334-796-2010',
            'correo' => 'ahmed26@williamson.net',
            'empresa' => [
                'nombre_empresa' => 'Graham LLC',
                'ruc_empresa' => '92232878798',
                'razon_social' => 'Mohr-Hartmann',
                'direccion_empresa' => "5028 Brakus Rue Apt. 006\nDawnport, WI 23964-4318"
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36dc'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '10849013'
            ],
            'nombres' => 'Taurean',
            'apellidos' => 'Johnson',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1978-02-16',
            'nacionalidad' => 'Oman',
            'region' => 'Olsonfurt',
            'direccion' => '127 Kerluke Center\nLake Mozellmouth, MD 96794',
            'telefono' => '1-385-774-5308',
            'correo' => 'flittel@marvin.com',
            'empresa' => [
                'nombre_empresa' => 'Aufderhar Ltd',
                'ruc_empresa' => '32469954038',
                'razon_social' => 'Roob, Muller and Carter',
                'direccion_empresa' => '4978 Grover Expressway Suite 963\nLake Maybelleview, WA 31485-6346'
            ]
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36dd'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '98813532'
            ],
            'nombres' => 'Bette',
            'apellidos' => "Torp",
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2008-10-16',
            'nacionalidad' => 'Japan',
            'region' => 'Auerview',
            'direccion' => '11815 Langosh Burgs Suite 571\nCarrollview, CO 79527',
            'telefono' => '+1-571-599-8627',
            'correo' => 'reece.gorczany@friesen.org',
            'empresa' => [
                'nombre_empresa' => 'Rowe LLC',
                'ruc_empresa' => '39036852427',
                'razon_social' => 'Hand, Hane and Quigley',
                'direccion_empresa' => '3070 Barton Streets Apt. 316\nSouth Nickolaschester, VT 05933'
            ],

        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36de'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '59428158'
            ],
            'nombres' => 'Ardith',
            'apellidos' => 'Nikolaus',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '1996-06-01',
            'nacionalidad' => 'Haiti',
            'region' => 'Port Pamelaborough',
            'direccion' => '4707 Destini Pine\nNorth Nehaport, WV 51163',
            'telefono' => '+1 (337) 574-4579',
            'correo' => 'chyna.shields@weissnat.com',
            'empresa' => [
                'nombre_empresa' => 'Kunde-Marquardt',
                'ruc_empresa' => '20661169315',
                'razon_social' => 'Gerlach-Senger',
                'direccion_empresa' => '863 Deon Hills\nNorth Angusborough, MD 48230'
            ],
        ]);

        Huesped::create([
            '_id' => new ObjectId('64a8270bdee721af8e0f36df'),
            'identificacion' => [
                'tipo_identificacion' => 'Dni',
                'identificacion_huesped' => '78242307'
            ],
            'nombres' => 'Ryder',
            'apellidos' => 'Graham',
            'sexo' => 'Masculino',
            'fecha_nacimiento' => '2003-05-08',
            'nacionalidad' => 'Montenegro',
            'region' => 'Rathville',
            'direccion' => '3970 Kaitlyn Pike Suite 009\nKrisport, NY 33162',
            'telefono' => '+1-678-487-7642',
            'correo' => 'johnson.michelle@osinski.org',
            'empresa' => [
                'nombre_empresa' => 'Simonis-Hoppe',
                'ruc_empresa' => '32277699615',
                'razon_social' => 'Huel, DuBuque and Senger',
                'direccion_empresa' => '304 Aurore Inlet Apt. 933\nAaliyahside, NH 68655'
            ],
        ]);

// 48

    }
}

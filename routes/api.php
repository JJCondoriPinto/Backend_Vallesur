<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login' , [AuthController::class, 'login'    ]) -> name('login' );
Route::post('/logout', [AuthController::class, 'logout'   ]) -> name('logout');

//----ESQUEMA DE ROLES----//

//End point para autenticar Administradores por rol
Route::post("/auth/role",[AuthController::class,"checkAuthRole"]);
//End point para autenticar Administradores
Route::post('/auth'  , [AuthController::class, 'checkAuth']) -> name('check' );

//----END POINTS PARA CONSUMO----//

//End point para registrar reservas
Route::post("/reserva",[ApiController::class,"storeReservas" ]);
//End point para ver Reservas
Route::get("/reserva",[ApiController::class,"listReservas" ]);
//End point para registrar CheckIn
Route::post("/checkin",[ApiController::class,"storeCheckIn"]);
//End point para listar CheckIn
Route::get("/checkin",[ApiController::class,"listCheckIn"]);
//End point para registrar CheckOut
Route::post("/checkout",[ApiController::class,"storeCheckOut"]);
//End point para listar CheckOut
Route::get("/checkout",[ApiController::class,"listCheckOut"]);
//End point para listar CheckOut
Route::get("/habitaciones",[ApiController::class,"listHabitaciones"]);
//End point para obtener datos de graficas Gerente
//Route::get("/graficos",[ApiController::class,"graficar_barras"]);
// End point para obtener datos de grafico de barras nacionalidad huespedes
Route::get("graficos_barras_1",[ApiController::class,"huesped_por_nacionalidad"]);
// End point para obtener datos de grafico de linear
Route::get("grafico_linear_1",[ApiController::class,"checkins_por_año"]);
// End pont para obtener datos de grafico circular o de pastel
Route::get("grafico_circular_1",[ApiController::class,"administrador_por_turno"]);
// End point para obtener datos de grafico de barras 2
Route::get("grafico_barras_2",[ApiController::class,"servicios_mas_consumidos"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


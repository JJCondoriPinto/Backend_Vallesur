<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\CheckinsController;
use App\Http\Controllers\CheckoutsController;
use App\Http\Controllers\GraficosController;
use App\Http\Controllers\HuespedesController;
use App\Http\Controllers\RecepcionistasController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\RemindController;
use App\Http\Controllers\HomeController;

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
Route::post("/auth/role", [AuthController::class,  "checkAuthRole" ]) -> name('checkRole' );
//End point para autenticar Administradores
Route::post("/auth"     , [AuthController::class,  "checkAuth"     ]) -> name('checkAuth' );

//----END POINTS PARA CONSUMO----//

//End point para registrar reservas
Route::post("/reserva", [ReservasController::class, "storeReservas" ]) -> name('storeReserva');
//End point para ver Reservas
Route::get("/reserva", [ReservasController::class, "listReservas" ]) -> name('listReservas');
//End point para ver una Reserva
Route::get("/reserva/{id}", [ReservasController::class, "show" ]) -> name('showReserva');
//End point para sacar reservas de un solo huesped.
/* Route::get("/reserva/{id}", [ReservasController::class, "listaReservaFromOne" ]) -> name('getReserva'); */
//End point para eliminar una reserva
/* Route::delete("/reserva", [ReservasController::class, "destroy" ]) -> name('deleteReserva'); */
//End point para actualizar una reserva
Route::put("/reserva", [ReservasController::class, "update" ]) -> name('updateReserva');  
// Borre el index porque no me sireve ya que tengo el listReservas
//End point para consumir reservas para los horarios
Route::get("/reserva-horarios", [ReservasController::class, "reservasHorarios" ]) -> name('updateReserva');
//End point para cancelar reserva (no devolucion)
Route::put("/reserva-cancelar/{id}", [ReservasController::class, "cancelarReserva" ]) -> name('cancelarReserva');

//End point para registrar CheckIn
Route::post("/checkin",[CheckinsController::class, "storeCheckIn" ]) -> name('storeCheckin');
//End point para listar CheckIn
Route::get("/checkin",[CheckinsController::class, "listCheckIn" ]) -> name('listCheckin');
//End point para mostrar un CheckIn
Route::get("/checkin/{id}",[CheckinsController::class, "show" ]) -> name('showCheckin');
//End point para actualizar un CheckIn
Route::put("/checkin/{id}",[CheckinsController::class, "update" ]) -> name('updateCheckin');;
//End point para eliminar un CheckIn
/* Route::delete("/checkin",[CheckinsController::class, "destroy" ]) -> name('deleteCheckin');; */

//End point para registrar CheckOut
Route::post("/checkout",[CheckoutsController::class, "storeCheckOut" ]) -> name('storeCheckout');
//End point para listar CheckOut
Route::get("/checkout",[CheckoutsController::class, "listCheckOut" ]) -> name('listCheckout');
//End pointp ara mostrar un CheckOut
Route::get("/checkout/{id}",[CheckoutsController::class, "show" ]) -> name('showCheckout');
//End point para eliminar un CheckOut
/* Route::delete("/checkout",[CheckoutsController::class, "destroy" ]) -> name('deleteCheckout'); */

//End point para crear una habitación
Route::post("/habitaciones", [HabitacionesController::class, "create"]) -> name('storeHabitacion');
//End point para listar habitaciones
Route::get("/habitaciones",[HabitacionesController::class,"listHabitaciones"]) -> name('listHabitaciones');
//End point para sacar habitaciones unicas en su tipo
Route::get("/habitacion/top", [HabitacionesController::class,"listaHabitacionesTop"]) -> name('listHabitacionesTop');
//End point para mostrar todas las habitaciones
Route::get("/habitaciones",[HabitacionesController::class,"index"]) -> name('indexHabitacion');
//End point para actualizar una habitación
Route::put("/habitaciones",[HabitacionesController::class,"update"]) -> name('updateHabitacion');
//End point para eliminar una habitacion
Route::delete("/habitaciones",[HabitacionesController::class,"destroy"]) -> name('deleteHabitacion');
//End point para mostrar una habitacion
Route::get("/habitaciones/{id}",[HabitacionesController::class,"show"]) -> name('showHabitacion');

//End point para crear huesped
Route::post("/huesped",[HuespedesController::class,"createHuesped"]) -> name('storeHuesped');
//End point para obtener huesped con dni
Route::get("/huesped",[HuespedesController::class,"getHuesped"]) -> name('getHuesped');
//End point para obtener todos los huespedes
Route::get("/huespedes", [HuespedesController::class, "listarHuespedes"])-> name('listHuespedes');
//End point para obtner a un huesped con id
Route::get("/huespedes/{id}", [HuespedesController::class, "show"])-> name('showHuesped');
//End point para eliminar un huesped
Route::delete("/huespedes", [HuespedesController::class, "destroy"]) -> name('deleteHuesped');
//End point para actualizar un huesped especificado.
Route::put("/huespedes/{id}", [HuespedesController::class, "update"])-> name('updateHuesped');
//End point para actualizar un huesped especificado.
Route::get("/dataReniec", [HuespedesController::class, "dataFromReniec"])-> name('dataReniec');


//End point para crear un recepcionista
Route::post("/recepcionistas", [RecepcionistasController::class, "create"]) -> name('storeRecepcionista');
//End point para obtener los recepcionistas
Route::get("/recepcionistas", [RecepcionistasController::class, "listRecepcionistas"]) -> name('listRecepcionistas');
//End point para eliminar recepcionistas
Route::delete("/recepcionistas", [RecepcionistasController::class, "destroy"]) -> name('deleteRecepcionista');
//End point para obtener a un recepcionista
Route::get("/recepcionistas/{id}", [RecepcionistasController::class, "show"]) -> name('showRecepcionista');
//End point para actualizar a un recepcionista
Route::put("/recepcionistas", [RecepcionistasController::class, "update"]) -> name('updateRecepcionista');

//End point para obtener datos de graficas Gerente
Route::get("/graficos",[GraficosController::class,"graficar_barras"]) -> name('graficos');
// End point para obtener datos de grafico de barras nacionalidad huespedes
Route::get("graficos_barras_1",[GraficosController::class,"huesped_por_nacionalidad"]) -> name('graficos_barras_1');
// End point para obtener datos de grafico de linear
Route::get("grafico_linear_1",[GraficosController::class,"checkins_por_año"]) -> name('grafico_linear_1');
// End pont para obtener datos de grafico circular o de pastel
Route::get("grafico_circular_1",[GraficosController::class,"administrador_por_turno"]) -> name('grafico_circular_1');
// End point para obtener datos de grafico de barras 2
Route::get("grafico_barras_2",[GraficosController::class,"servicios_mas_consumidos"])-> name('grafico_barras_2');
// End point para obtener la cantidad de huespedes que pertenecen a empresas y a que empresas pertenecen
Route::get("grafico_circular_polar",[GraficosController::class,"habitaciones_max_precio"]) -> name('grafico_circular_polar');
// End point para obtener la cantidad de huespedes que pertenecen a empresas y a que empresas pertenecen
Route::get("grafico_linear_2",[GraficosController::class,"checkouts_por_año"]) -> name('grafico_linear_2'); 

// End points para homes
Route::get("count/recepcionistas", [HomeController::class, "countRecepcionistas"]);
Route::get("count/checkins", [HomeController::class, "countCheckins"]);
Route::get("count/checkouts", [HomeController::class, "countCheckouts"]);
Route::get("count/habitaciones", [HomeController::class, "countHabitaciones"]);
Route::get("count/huespedes", [HomeController::class, "countHuespedes"]);
Route::get("count/reservas", [HomeController::class, "countReservas"]);

Route::post("home/remind", [RemindController::class, "create"]);
Route::get("home/remind", [RemindController::class, "index"]);
Route::delete("home/remind/{id}", [RemindController::class, "destroy"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


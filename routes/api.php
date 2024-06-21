<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Permiso;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ServicioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// API AUTOS

Route::post('auto/guardar',[AutoController::class,'storeApi']);//strore = guardar
Route::post('/auto/borrar/{id}',[AutoController::class,'deleteApi']);
Route::get('/autos',[AutoController::class, 'store']);
Route::get('autos',[AutoController::class,'indexApi']);



// RUTAS NUEVAS AUTOLAVADO

Route::post('servicio/guardar',[ServicioController::class,'storeApi']);//strore = guardar
Route::delete('/servicio/borrar/{id}',[ServicioController::class,'deleteApi']);
//Route::get('servicios',[ServicioController::class,'viewApi']);//autorized =  autorizados
Route::get('/servicios',[ServicioController::class, 'store']);
Route::get('servicios',[ServicioController::class,'indexApi']);
// LOGUIN
Route::post('login',[LoginController::class,'login']);




















Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//RUTAS PARA LAS APIS
Route::post('permiso/guardar',[PermisoController::class,'store']);//strore = guardar
Route::get('permiso/pending',[PermisoController::class,'pendiente']);//pending = Pendientes
Route::get('permiso/autorizados',[PermisoController::class,'authorized']);//autorized =  autorizados
Route::get('permiso/rechazados',[PermisoController::class,'rejected']);// permisos = rejectd
Route::post('permiso/autorizar',[PermisoController::class,'authorize']); //autorize =  autorizado 

//NUEVAS RUTAS ATLITEC
Route::post('permiso/guardar',[PermisoController::class,'store']);//strore = guardar
Route::post('permiso/borrar',[PermisoController::class,'delete']);//pending = Pendientes
Route::get('permisos',[PermisoController::class,'list']);//autorized =  autorizados
Route::get('permiso',[PermisoController::class,'index']);//autorized =  autorizados


//RUTA PARA LOGIN
//Route::post('login',[LoginController::class,'login']);
//Route::post('login',[LoginController::class,'login']);

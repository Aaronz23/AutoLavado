<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\AvisoController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\ProfesoreController;
use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hola', function () {
    return "Hola mundo";
});

Route::get('presentacion',[PresentacionController::class,'index']);
//Route::get('login',[Formcontroller::class,'index']);
Route::post('validate',[Formcontroller::class,'login'])
->name('login.validate');

Auth::routes();
//ruta log
Route::prefix('admin')->middleware(['auth'])->namespace('App\Http\Controllers\Admin')->group(function(){
    
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

});

//Autos
Route::get('/auto/nuevo',[AutoController::class,'view'])->name('auto.nuevo')->middleware('auth');
Route::post('/auto/guardar',[AutoController ::class, 'store'])->name('auto.guardar')->middleware('auth');
Route::delete('/auto/eliminar/{id}',[AutoController::class,'delete'])->name('auto.eliminar')->middleware('auth');
Route::get('Autos',[AutoController::class, 'index'])->name('Autos')->middleware('auth');






//Servicio
Route::post('/servicio/guardar',[ServicioController::class, 'store'])->name('servicio.guardar')->middleware('auth');
Route::get('/servicio/nuevo',[ServicioController::class, 'view'])->name('servicio.nuevo')->middleware('auth');
Route::get('/Servicios',[ServicioController::class, 'index'])->name('Servicios')->middleware('auth');
Route::delete('/servicios/eliminar/{id}',[ServicioController::class,'delete'])->name('servicio.eliminar')->middleware('auth');

//etapas
Route::get('/etapa/nueva',[EtapaController::class,'view'])->name('etapa.nueva')->middleware('auth');
Route::post('/etapa/guardar',[EtapaController ::class, 'store'])->name('etapa.guardar')->middleware('auth');
Route::delete('/etapa/eliminar/{id}',[EtapaController::class,'delete'])->name('etapa.eliminar')->middleware('auth');
Route::get('/Etapas',[EtapaController::class, 'index'])->name('Etapas')->middleware('auth');





















//division
//Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/division/nueva', [DivisionController::class, 'view'])->name('division.nueva')->middleware('auth');
Route::post('/division/guardar', [DivisionController::class, 'store'])->name('division.guardar')->middleware('auth');
Route::get('/divisiones', [DivisionController::class, 'index'])->name('divisiones')->middleware('auth', 'role');
Route::delete('/division/eliminar/{id}', [DivisionController::class, 'delete'])->name('division.eliminar')->middleware('auth');

//puestos
Route::get('/puesto/nueva', [PuestosController::class, 'view'])->name('puesto.nueva')->middleware('auth');
Route::post('/puesto/guardar', [PuestosController::class, 'store'])->name('puesto.guardar')->middleware('auth');
Route::get('/puestos', [PuestosController::class, 'index'])->name('puestos')->middleware('auth', 'role');
Route::delete('/puesto/eliminar/{id}', [PuestosController::class, 'delete'])->name('puesto.eliminar')->middleware('auth');

//profesores
Route::get('/profesor/nuevo', [ProfesoreController::class, 'view'])->name('profesore.nuevo')->middleware('auth');
Route::post('/profesor/guardar', [ProfesoreController::class, 'store'])->name('profesore.guardar')->middleware('auth');
Route::get('/profesores', [ProfesoreController::class, 'index'])->name('profesores')->middleware('auth', 'role');
Route::delete('/profesor/eliminar/{id}', [ProfesoreController::class, 'delete'])->name('profesore.eliminar')->middleware('auth');

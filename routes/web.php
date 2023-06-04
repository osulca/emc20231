<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\CompraController;

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

Route::get("/direccion/registrar", [DireccionController::class, 'registrar'])
->name("registro direccion")
->middleware("auth");
Route::post("/direccion/guardar", [DireccionController::class, 'guardar'])
->name("guardar direccion")
->middleware("auth");

Route::get("/compra/registrar", [CompraController::class, 'registrar'])
->name("registro compra")
->middleware("auth");
Route::post("/compra/guardar", [CompraController::class, 'guardar'])
->name("guardar compra")
->middleware("auth");;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

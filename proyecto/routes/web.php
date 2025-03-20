<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductosController;


Route::get('/saludo', function () {//lo que escribe el usuario en la barra de direcciones
    return view('inicio');//->nombre del archivo(sin extensión) en la carpeta resources/views
});
Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', [SumaController::class, 'suma']);
Route::get('/adios', function () {
    return view('bye');
});
Route::get('/productos', [ProductosController::class, 'index']);
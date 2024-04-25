<?php

use Illuminate\Support\Facades\Route;
Route::resource('ventas', 'VentaController');

Route::get('/', function () {
    return view('welcome');
});

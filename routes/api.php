<?php

use App\Http\Controllers\Api\PruebaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(PruebaController::class)->group(function(){

    Route::get('/prueba', 'index');

    Route::get('/sensores', 'sensores');

    

});
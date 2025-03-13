<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('device/{key}',[DeviceController::class,'index']);

// THIS IS NOT WORKING ON LARAVEL 11
// Route::get('device/{key.name}', [DeviceController::class, 'index']);



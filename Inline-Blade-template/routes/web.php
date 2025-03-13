<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list',[Products::class, 'productList']);

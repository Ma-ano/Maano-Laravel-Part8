<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


$data="hi, let's learn laravel";
// $data=Str::ucfirst($data);
// $data=Str::replaceFirst("Hi","Hello",$data);
// $data=Str::camel($data);


$data=Str::of($data)
->ucfirst($data)
->replaceFirst("Hi","Hello",$data)
->camel($data);

echo $data;

// Route::get('/', function () {
//     return view('welcome');
// });

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Products extends Controller
{
    //
    function productList(){
        $totalProduct=20;
        return Blade::render('<h1>{{$total}} Product List</h1>',['total'=>$totalProduct]);
    }   

    function addProduct(){
        return "Product is added Rawr";
    }   

    function updateProduct(){
        return "Product is updated Rawr";
    }   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    // One to One Relationship
    function list(){
        return Seller::find(1)->ProductData;
    }


    // One to Many Relationship
    function manyRel(){
        return Seller::find(1)->ProductMany;
    }


    // Many to One Relationship
    function manyToOne(){
        return Product::with('seller')->get();
    }
}

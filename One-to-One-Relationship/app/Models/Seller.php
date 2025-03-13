<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    // One to One Relationship

    function ProductData(){
        return $this->hasOne('App\Models\Product',);
    }

    // One to Many Relationship

    function ProductMany(){
        return $this->hasMany('App\Models\Product',"owner_id");
    }

}

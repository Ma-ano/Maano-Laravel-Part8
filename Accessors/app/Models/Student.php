<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // get(Column Name)Attribute
    function getNameAttribute($val){
        return ucfirst($val);
    }

    function getPhoneAttribute($val){
        return "+63-".$val;
    }

    function setNameAttribute($val){
        return $this->attributes['name']=ucfirst($val);
    }

    function setPhoneAttribute($val){
        return $this->attributes['phone']="+63-".$val;
    }
}

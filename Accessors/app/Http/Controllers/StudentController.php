<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function list(){
        return Student::all();
    }

    function save(){
        $student = new Student;
        $student->name="phonewao";
        $student->phone="978657890";
        $student->email="john doe@test.com";

        if( $student->save()){
            echo "Student has been saved";
        }


    }



}
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wildcard' , function (){

    $students = [
        [
            "id" => "1" , 
            "name" => "Mario" , 
            "gender" => "male" , 
            "age" => "19" ,
            "skill" => "Javascript"
        ],
        [
            "id" => "2" , 
            "name" => "Chelly" , 
            "gender" => "female" , 
            "age" => "18" ,
            "skill" => "VueJS"
        ],
        [
            "id" => "3" , 
            "name" => "Harry" , 
            "gender" => "male" , 
            "age" => "21" ,
            "skill" => "Laravel"
        ],
        [
            "id" => "4" , 
            "name" => "Pade" , 
            "gender" => "male" , 
            "age" => "20" ,
            "skill" => "NextJS"
        ],
    ];

    return view('wildcard.index' , ["students" => $students]);
});

Route::get('/wildcard/{id}' , function ($id){
    return view('wildcard.show_student' , ["id" => $id]);
});

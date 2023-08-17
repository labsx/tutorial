<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view ('user.create');
    }


    public function show($id){
$data = array(
   

);

        return view ('user')
        ->with ('name', 'PinoyCoder')
        ->with ('age', 2)
        ;
    }

    public function index (){
        return 'Helollo';
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController{
    public function index(){
        //return "MI PRIMER CONTROLADOR";
        return view("Test/index")->with('title', 'MI PRIMER APLICACIÓN CON LARAVEL');
    }
}
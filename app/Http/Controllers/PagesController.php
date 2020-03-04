<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function orden(){
        return view('orden');
    }

    public function resumen(){
        return view('resumenorden');
    }

    public function lista(){
        return view('listaorden');
    }

    public function estado(){
        return view('estadoorden');
    }

}

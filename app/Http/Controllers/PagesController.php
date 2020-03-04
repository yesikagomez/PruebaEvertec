<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function orden(){
        return view('orden');
    }

    public function resumen($id){
        $resumen = App\Orden::findOrFail($id);
        return view('resumenorden',compact('resumen'));
    }

    public function lista(){
        $lista = App\Orden::all();
        return view('listaorden',compact('lista'));
    }

    public function estado(){
        return view('estadoorden');
    }

    public function crear(Request $request){
        //return $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required'
        ]);
        $nuevaorden=new App\Orden;
        $nuevaorden->name=$request->name;
        $nuevaorden->email=$request->email;
        $nuevaorden->phone=$request->phone;
        $nuevaorden->status=$request->status;

        $nuevaorden->save();

        return back()->with('mensaje','Orden Creada');
    }
}

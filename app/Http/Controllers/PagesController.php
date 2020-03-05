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

    public function editar($id){
        $lista = App\Orden::findOrFail($id);
        return view('actualizar',compact('lista'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required'
        ]);
        $listaupdate = App\Orden::findOrFail($id);
        $listaupdate->name=$request->name;
        $listaupdate->email=$request->email;
        $listaupdate->phone=$request->phone;
        $listaupdate->status=$request->status;
        $listaupdate->save();
        return back()->with('mensaje','Orden Actualizada');
    }

    public function eliminar($id){
        $listaeliminar = App\Orden::findOrFail($id);
        $listaeliminar->delete();
        return back()->with('mensaje','Orden Eliminada');
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

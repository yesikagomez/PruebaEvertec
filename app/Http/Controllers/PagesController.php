<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use GuzzleHttp\Client;

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
        $lista = App\Orden::paginate(4);
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
            'surname' => 'required',
            'document' => 'required',
            'documenttype' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $listaupdate = App\Orden::findOrFail($id);
        $listaupdate->name=$request->name;
        $listaupdate->surname=$request->surname;
        $listaupdate->documenttype=$request->documenttype;
        $listaupdate->document=$request->document;
        $listaupdate->email=$request->email;
        $listaupdate->phone=$request->phone;
        $listaupdate->save();
        return back()->with('mensaje','Orden Actualizada');
    }

    public function eliminar($id){
        $listaeliminar = App\Orden::findOrFail($id);
        $listaeliminar->delete();
        return back()->with('mensaje','Orden Eliminada');
    }

    public function crear(Request $request){
            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'document' => 'required',
                'documenttype' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);
        if ($request != ""){
            $nuevaorden=new App\Orden;
            $nuevaorden->name=$request->name;
            $nuevaorden->surname=$request->surname;
            $nuevaorden->documenttype=$request->documenttype;
            $nuevaorden->document=$request->document;
            $nuevaorden->email=$request->email;
            $nuevaorden->phone=$request->phone;
            $nuevaorden->status="Created";
            $nuevaorden->save();
        }
            return view('vistapago',compact('nuevaorden'));
    }
    public function pago($id){
        $nuevaorden =  App\Orden::findOrFail($id);
        return view('vistapago',compact('nuevaorden'));
    }
}

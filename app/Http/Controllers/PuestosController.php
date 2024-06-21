<?php

namespace App\Http\Controllers;

use App\Models\Puestos;
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    public function view(Request $req){
    
        if($req->id == 0){
            $puesto = new Puestos();
        }else{
            $puesto = Puestos::find($req->id); 
        }
        
        return view('puesto', compact('puesto'));
    }
    public function store(Request $req)
    {
        if($req->id==0){
            $puesto = new Puestos();
        }else{
            $puesto = Puestos::find($req->id); 
        }
        $puesto->codigo = $req->codigo;
        $puesto->nombre = $req->nombre;
    
        $puesto->save();
        //return redirect()->to("home");
        return redirect()->route("puestos");
    }
    public function index()
    {
        $puestos = Puestos::all();
    
        return view('puestos', compact('puestos'));
    }
    public function delete($id){
    
        $puesto = Puestos::find($id);
    
        $puesto->delete();
        return redirect()->route("puestos");
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Etapas;
use App\Models\Servicios;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class EtapaController extends Controller
{
    public function view(Request $req){
        if($req->id == 0){
            $etapa = new Etapas();
        }else{
            $etapa = Etapas::find($req->id); 
        }
        $servicios = Servicios::all();
        return view('etapa', compact('etapa','servicios'));
    }
    public function store(Request $req)
    {
        if($req->id==0){
            $etapa = new Etapas();
        }else{
            $etapa = Etapas::find($req->id); 
        }

        $etapa -> nombre = $req -> txtNombre;
        $etapa -> duracion = $req -> txtHrs;
        $etapa -> id_servicio = $req -> servicio;//foraneas
        $etapa->save();


        //return redirect()->to("home");
        return redirect()->route("Etapas");
    }
    public function index()
    {
        $etapas = Etapas::join('servicios', 'etapas.id_servicio', '=', 'servicios.id')
                           ->select('etapas.*', 'servicios.nombre as nombre_servicio')
                           ->get();
    //JOIN 
        return view('etapas', compact('etapas'));
    }
    public function delete($id){
    
        $etapa = Etapas::find($id);
    
        $etapa->delete();
        return redirect()->route("Etapas");
    }
    
    
}


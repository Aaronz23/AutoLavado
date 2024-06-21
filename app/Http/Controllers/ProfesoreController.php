<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use App\Models\Profesore;
use App\Models\Puestos;
use App\Models\User;

class ProfesoreController extends Controller
{
    public function view(Request $req){
        if($req->id == 0){
            $profesore = new Profesore();
        }else{
            $profesore = Profesore::find($req->id);
        }
        $users  = User::all();
        $divisiones = Division::all();
        $puesto= Puestos::all();

        return view('profesore',compact('profesore','users','divisiones','puesto'));
    }

    public function store(Request $req)
    {
        if($req->id == 0)
        {
            $profesore = new Profesore();
            }else{
            $profesore = Profesore::find($req->id);
        }
        //codigo nuevo 
       // $profesore -> numero = $req -> numero;
        //$profesore -> nombre = $req -> nombre;
        //$profesore -> horas_asignadas = $req -> horas_asignadas;
        //$profesore -> dia_econom_c = $req -> dia_econom_c ;
        //$profesore -> id_usuario = $req -> id_usuario;
        //$profesore -> id_puesto = $req -> id_puesto;
        //$profesore -> id_division = $req -> id_divisiom;

        //codigo viejo A
        $profesore -> numero = $req -> txtNumero;
        $profesore -> nombre = $req -> txtNombre;
        $profesore -> horas_asignadas = $req -> txtHrs;
        $profesore -> dia_econom_c = $req -> txtDias;
        $profesore -> id_usuario = $req -> user;//foranes
        $profesore -> id_puesto = $req -> puesto;
        $profesore -> id_division = $req -> division;
        $profesore->save();

        return redirect()->route("profesores");
    }

    public function delete($id){
        $profesore = Profesore::find($id);
        $profesore->delete();
        return redirect()->route("profesores");
    }


   

    public function index(){
        $profesores = Profesore::join('puestos','profesores.id_puesto','=','puestos.id')
        ->select('profesores.*','puestos.nombre as nombre_puesto')
        ->get();
        return view('profesores',compact('profesores'));

 
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function pendiente(){
        $permisos = Permiso::where('estado','P')->get();
        return $permisos;
    }
    //---------------------------------------------------
     public function store(Request $req)
    {
        if($req->id !=0)
            $permisos  = Permiso::find($req->id);
        else
            $permiso = new Permiso();
    
        $permiso->fecha = $req->fecha;
        $permiso->estado = 'P';
        $permiso->motivo = $req->motivo;
        $permiso->observaciones = $req->observaciones;
        $permiso->id_profesore = $req->id_profesore;
        $permiso->save();

        return "SIRVIO 😜😎";
    }

    public function authorized(){
        $permisos = Permiso::where('estado','A')->get();
        return $permisos;
    }

    public function rejected(){
        $permisos = Permiso::where('estado','R')->get();
        return $permisos;
    }

}

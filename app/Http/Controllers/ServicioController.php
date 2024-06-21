<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    //-----------------------------------------VIEW = EDITAR --------------------------------------------------------------- 
    public function view(Request $req){
        if($req->id == 0){
            $servicio = new Servicios();
        }else{
            $servicio = Servicios::find($req->id); 
        }
        return view('servicio',compact('servicio'));
    }

    ///--------------API EDITAR------------
    public function viewApi(Request $req){
        if($req->id == 0){
            $servicio = new Servicios();
        }else{
            $servicio = Servicios::find($req->id); 

        }

        $servicio->update($req->all());

        return response()->json($servicio);
       // return response()->json($servicio);
       // return view('servicio',compact('servicio'));
    }
    
    //--------------------------------------------FUNCION STORE = GUARDAR -----------------------------
    public function store(Request $req)//GUARDAR 
    {
        if($req->id==0){
            $servicio = new Servicios();
        }else{
            $servicio = Servicios::find($req->id); 
        }
        $servicio-> codigo = $req->codigo;
        $servicio-> fecha;
        $servicio-> nombre = $req->nombre;
        $servicio-> descripcion = $req->descripcion;
        $servicio-> precio = $req->precio;
    
        $servicio->save();
        //return redirect()->to("home");
        return "OK";
        //return redirect()->route("Servicios");
    }
    //----------------API----------------------------------------------------------------
    public function storeApi(Request $req)
    {
        if($req->id==0){
            $servicio = new Servicios();
        }else{
            $servicio = Servicios::find($req->id); 
        }
        $servicio-> codigo = $req->codigo;
        $servicio-> fecha;
        $servicio-> nombre = $req->nombre;
        $servicio-> descripcion = $req->descripcion;
        $servicio-> precio = $req->precio;
    
        $servicio->save();
        //return redirect()->to("home");
        return "ok";
       // return redirect()->route("Servicios");
    }




//-------------------------------------------FUNCTION INDEX = MUESTRA TODOS LOS REGISTROS.------

    public function index()
    {
        $servicios = Servicios::all();
    
        return view('servicios', compact('servicios'));
    }

//---------------------------- FUNCTION INDEX API 
public function indexApi()
{
    $servicios = Servicios::all();
    return response()->json($servicios);

    //return "MUESTRA TODO 🏃‍♂️";
}





    //-------------------------------FUNCTION DELETE = ELIMINAR ---------
    public function delete($id){
    
        $servicio = Servicios::find($id);
    
        $servicio->delete();
        return redirect()->route("Servicios");
    }
    


    //__________________DELTE API

    public function deleteApi($id){
    
        $servicio = Servicios::find($id);
    
        $servicio->delete();
        return "SI BORRO 🧛‍♀️";
    }
    
    
}

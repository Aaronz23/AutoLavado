<?php

namespace App\Http\Controllers;


use App\Models\Autos;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    ////-----------------------------------------VIEW = EDITAR --------------------------------------------------------------- 
    public function view(Request $req){
        if($req->id == 0){
            $auto = new Autos(); // $servicio = new Servicios();
        }else{
            $auto = Autos::find($req->id); 
        }
        return view('auto',compact('auto'));
    }

    ///--------------API EDITAR------------
    public function viewApi(Request $req){
        if($req->id == 0){
            $auto = new Autos();
        }else{
            $auto = Autos::find($req->id); 

        }

        $auto->update($req->all());

        return response()->json($auto);
       // return response()->json($servicio);
       // return view('servicio',compact('servicio'));
    }
    
    //--------------------------------------------FUNCION STORE = GUARDAR -----------------------------
    public function store(Request $req)//GUARDAR 
    {
        if($req->id==0){
            $auto = new Autos();
        }else{
            $auto = Autos::find($req->id); 
        }
        $auto-> fecha;
        $auto-> matricula = $req->TxtMatricula;
        $auto-> color = $req->TxtColor;
        $auto-> modelo = $req->TxtModelo;
        $auto-> marca = $req->TxtMarca;
    
        $auto ->save();
        //return redirect()->to("home");
   
        return redirect()->route("Autos");
    }
    //----------------API----------------------------------------------------------------
    public function storeApi(Request $req)
    {
        if($req->id==0){
            $auto = new Autos();
        }else{
            $auto = Autos::find($req->id); 
        }
        $auto-> fecha;
        $auto-> matricula = $req->TxtMatricula;
        $auto-> color = $req->TxtColor;
        $auto-> modelo = $req->TxtModelo;
        $auto-> marca = $req->TxtMarca;
    
        $auto->save();
        //return redirect()->to("home");
        return "Guardado";
       // return redirect()->route("Servicios");
    }




//-------------------------------------------FUNCTION INDEX = MUESTRA TODOS LOS REGISTROS.------

    public function index()
    {
        $Autos = Autos::all();
    
        return view('Autos', compact('Autos'));
    }

//---------------------------- FUNCTION INDEX API 
public function indexApi()
{
    $Autos = Autos::all();
    return response()->json($Autos);

    //return "MUESTRA TODO 🏃‍♂️";
}





    //-------------------------------FUNCTION DELETE = ELIMINAR ---------
    public function delete($id){
    
        $auto = Autos::find($id);
    
        $auto->delete();
        return redirect()->route("Autos");
    }
    


    //__________________DELTE API

    public function deleteApi($id){
    
        $auto = Autos::find($id);
    
        $auto->delete();
        return "SI BORRO 🧛‍♀️";
    }
}

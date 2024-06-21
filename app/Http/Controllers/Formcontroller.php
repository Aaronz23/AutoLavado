<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function login(Request $req){

        $user = form::where('username','=',$req->username)
        ->where('password','=',$req->password)
        ->first();
        if($user){
            return view('dashboard', compact('user'));
        }else{
            return "Datos Invalidos!";
        }
        return "Usuario: " . $req->username . "Contraseña: " . $req->password;
    }
}

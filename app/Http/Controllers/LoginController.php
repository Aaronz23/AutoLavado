<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        // Validar la solicitud
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(["email" => $req->email, "password" => $req->password])) {
            $user = Auth::user();
            // Asegúrate de que tienes el trait HasApiTokens en el modelo User si usas Laravel Sanctum
            $token = $user->createToken("app")->plainTextToken;
            $arr = [
                'acceso' => 'Ok',
                'error' => '',
                'token' => $token,
                'nombre' => $user->name,
                'id_usuario' => $user->id, //nuevo
                
            ];
            return response()->json($arr);
        } else {
            $arr = [
                'acceso' => '', 
                'token' => '', 
                'error' => 'Oooopss',
                'id_usuario' => null,
                'nombre' => '',
                
            ];
        }
    }
}

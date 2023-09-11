<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function cadastrar(Request $request){
        $campo = $request->validate([
            'login' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);
        Usuario::create($campo);

        return "Esta entrando no cadastro";

    }

    public function home(){
        return view('home');
    }
}

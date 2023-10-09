<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    //Função para abrir a página inicial
    public function home(){
        return view('home');
    }

    //Função para cadastrar um usuário
    public function cadastrar(Request $request){
        $campos = $request->validate([
            'nome' => ['required', 'min: 3', 'max: 30', Rule::unique('usuarios', 'nome', )],
            'email' => ['required', 'email', Rule::unique('usuarios', 'email', )],
            'senha' => ['required', 'min: 8', 'confirmed'],
        ]);
        
        Usuario::create($campos);
        return "Esta entrando no cadastro"; // aqui poderíamos redirecionar para a página inicial do usuário logado

    }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;

class CadastroController extends Controller
{
    public function mostrarFormularioRegistro()
    {
        return view('registro');
    }

    public function processarRegistro(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:6|max:20|confirmed',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome deve ter no máximo 50 caracteres.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'email.unique' => 'Este e-mail já está sendo usado por outro usuário.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter no mínimo 6 caracteres.',
            'senha.max' => 'A senha deve ter no máximo 20 caracteres.',
            'senha.confirmed' => 'A confirmação de senha não coincide com a senha.',
        ]);
        // logica banco
        $novoUsuario = new Usuario;
        $novoUsuario->nome = $request->nome;
        $novoUsuario->email = $request->email;
        $novoUsuario->senha = bcrypt($request->senha);
        $novoUsuario->save();

        Session::flash('success', 'Usuário registrado com sucesso!');


        return back();
    }


    public function mostrarUsuariosCadastrados()
    {
        $usuarios = Usuario::all();

        return view('usuarios', ['usuarios' => $usuarios]);
    }
}

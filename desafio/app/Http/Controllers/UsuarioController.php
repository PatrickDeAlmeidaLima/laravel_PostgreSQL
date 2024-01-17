<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:6|max:20|confirmed',
        ]);

        $usuario = Usuario::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'senha' => bcrypt($request->input('senha')),
        ]);

        return response()->json(['mensagem' => 'Usuário registrado com sucesso', 'usuario' => $usuario], 201);
    }
}

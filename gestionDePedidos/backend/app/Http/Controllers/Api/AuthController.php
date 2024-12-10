<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if ($usuario && Hash::check($request->password, $usuario->password)) {
            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'usuario' => [
                    'id_usuario' => $usuario->id_usuario,
                    'name' => $usuario->name,
                    'email' => $usuario->email,
                ],
                'status' => 200,
            ]);
        }
        return response()->json([
            'message' => 'Credenciales inválidas',
            'status' => 401,
        ], 401);
    }
}

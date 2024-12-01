<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    public function index(){
        $usuario=Usuario::all();
        return response()->json($usuario, 200);
    }
    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'name'=>'required|max:225',
            'phone'=>'required|digits:10',
            'email'=>'required|email|unique:usuarios',
            'password'=>'required'
        ]);
        if ($validator->fails()){
            $data = [
                'message' => 'Error en la validacion de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data,400);
        }
        $usuario = Usuario::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        if(!$usuario){
            $data=[
                'message' => 'Error al crear el usuario',
                'status' => 500
            ];
            return response()->json($data,500);
        }
        $data=[
            'usuario' => $usuario,
            'status' => 201
        ];
        return response()->json($data,201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{    public function index()
    {
        $pedidos = Pedido::with('usuario')->get();
        return response()->json($pedidos, 200);
    }
    public function show($id)
    {
        $pedido = Pedido::with('usuario')->find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }
        return response()->json($pedido, 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:users,id',
            'progreso' => 'required|string',
            'Total' => 'required|string',
        ]);

        $pedido = Pedido::create($request->all());
        return response()->json($pedido, 201);
    }
    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $request->validate([
            'id_usuario' => 'sometimes|exists:users,id',
            'progreso' => 'sometimes|string',
            'Total' => 'sometimes|string',
        ]);

        $pedido->update($request->all());
        return response()->json($pedido, 200);
    }
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $pedido->delete();
        return response()->json(['message' => 'Pedido eliminado'], 200);
    }
}

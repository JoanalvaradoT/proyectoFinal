<?php
namespace App\Http\Controllers\Api;
use App\Models\Pedido; 
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class PedidosController extends Controller
{
    // Listar todos los pedidos
    public function index()
    {
        $pedidos = Pedido::all();

        return response()->json(['data' => $pedidos], 200);
    }

    // Mostrar un pedido específico
    public function show($id)
    {
        $pedido = Pedido::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        return response()->json(['data' => $pedido], 200);
    }

    // Crear un nuevo pedido
    public function store(Request $request)
    {
        $request->validate([
            'Producto' => 'required|string',
            'cantidad_producto' => 'required|string',
            'cantidad_producto' => 'required|integer',
        ]);

        $pedido = Pedido::create($request->all());

        return response()->json(['message' => 'Pedido creado con éxito', 'data' => $pedido], 201);
    }

    // Editar un pedido existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Producto' => 'string',
            'cantidad_producto' => 'string',
            'direccion' => 'string',
        ]);

        $pedido = Pedido::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $pedido->update($request->all());

        return response()->json(['message' => 'Pedido actualizado con éxito', 'data' => $pedido], 200);
    }

    // Eliminar un pedido
    public function destroy($id)
    {
        $pedido = Pedido::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $pedido->delete();

        return response()->json(['message' => 'Pedido eliminado con éxito'], 200);
    }
}

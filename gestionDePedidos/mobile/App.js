import React from "react";
import { NavigationContainer } from "@react-navigation/native";
import { createStackNavigator } from "@react-navigation/stack";

import Home from "./screens/Home";
import ConsultarPedidos from "./screens/ConsultarPedidos";
import CrearPedido from "./screens/CrearPedido";
import EditarPedido from "./screens/EditarPedido";
import EliminarPedido from "./screens/EliminarPedido";
import ConsultarProductos from "./screens/ConsultarProductos";
import CrearProducto from "./screens/CrearProducto";
import EditarProducto from "./screens/EditarProducto";
import EliminarProducto from "./screens/EliminarProducto";
import ConsultarClientes from "./screens/ConsultarClientes";
import CrearCliente from "./screens/CrearCliente";
import EditarCliente from "./screens/EditarCliente";
import EliminarCliente from "./screens/EliminarCliente";

const Stack = createStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen
          name="Home"
          component={Home}
          options={{ title: "" }}
        />

        <Stack.Screen
          name="ConsultarPedidos"
          component={ConsultarPedidos}
          options={{ title: "Consultar Pedidos" }}
        />
        <Stack.Screen
          name="CrearPedido"
          component={CrearPedido}
          options={{ title: "Crear Pedido" }}
        />
        <Stack.Screen
          name="EditarPedido"
          component={EditarPedido}
          options={{ title: "Editar Pedido" }}
        />
        <Stack.Screen
          name="EliminarPedido"
          component={EliminarPedido}
          options={{ title: "Eliminar Pedido" }}
        />

        <Stack.Screen
          name="ConsultarProductos"
          component={ConsultarProductos}
          options={{ title: "Consultar Productos" }}
        />
        <Stack.Screen
          name="CrearProducto"
          component={CrearProducto}
          options={{ title: "Crear Producto" }}
        />
        <Stack.Screen
          name="EditarProducto"
          component={EditarProducto}
          options={{ title: "Editar Producto" }}
        />
        <Stack.Screen
          name="EliminarProducto"
          component={EliminarProducto}
          options={{ title: "Eliminar Producto" }}
        />

        <Stack.Screen
          name="ConsultarClientes"
          component={ConsultarClientes}
          options={{ title: "Consultar Clientes" }}
        />
        <Stack.Screen
          name="CrearCliente"
          component={CrearCliente}
          options={{ title: "Crear Cliente" }}
        />
        <Stack.Screen
          name="EditarCliente"
          component={EditarCliente}
          options={{ title: "Editar Cliente" }}
        />
        <Stack.Screen
          name="EliminarCliente"
          component={EliminarCliente}
          options={{ title: "Eliminar Cliente" }}
        />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar la lógica para mostrar la lista de usuarios
        return view('usuarios.index');
    }

    public function create()
    {
        // Aquí puedes agregar la lógica para mostrar el formulario de creación de usuario
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Aquí puedes agregar la lógica para almacenar un nuevo usuario en la base de datos
        // Validar y guardar el usuario
    }

    public function show($id)
    {
        // Aquí puedes agregar la lógica para mostrar un usuario específico
        return view('usuarios.show', compact('id'));
    }

    public function edit($id)
    {
        // Aquí puedes agregar la lógica para mostrar el formulario de edición de un usuario
        return view('usuarios.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Aquí puedes agregar la lógica para actualizar un usuario existente en la base de datos
        // Validar y actualizar el usuario
    }

    public function destroy($id)
    {
        // Aquí puedes agregar la lógica para eliminar un usuario de la base de datos
    }
}

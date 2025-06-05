<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('usuarios.index');
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return view('usuarios.show', compact('id'));
    }

    public function edit($id)
    {
        return view('usuarios.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}

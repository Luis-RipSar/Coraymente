<?php
namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        $usuarios = UserModel::with('role')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $roles = RoleModel::all(); // Para el selector de roles
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:6',
            'rol_id' => 'required|exists:roles,id',
        ]);

        UserModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol_id,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito');
    }

    public function edit(UserModel $usuario)
    {
        $roles = RoleModel::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    public function update(Request $request, UserModel $usuario)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $usuario->id,
            'rol_id' => 'required|exists:roles,id',
        ]);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado');
    }

    public function destroy(UserModel $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado');
    }
}
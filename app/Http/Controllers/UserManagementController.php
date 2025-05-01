<?php
namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        $usuarios = UserModel::where('role_id', 3)
                         ->with('role')
                         ->get();
        return view('usuarios.index', compact('usuarios'));
    }
    public function pacientesIndex()
    {
        $pacientes = UserModel::where('role_id', 3)
                         ->with('role')
                         ->get();
        return view('usuarios.index', compact('pacientes'));
    }

    public function profesionalesIndex()
    {
        $profesionales = UserModel::where('role_id', 2)
                         ->with('role')
                         ->get();
        return view('profesionales.index', compact('profesionales'));
    }

    public function create()
    {
        $roles = RoleModel::all();
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6',
            'nombre'    => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono'  => 'required|string|max:50',
            'direccion' => 'required|string|max:255',
            'ciudad'    => 'required|string|max:100',
            'role_id'   => 'required|exists:roles,id',
        ]);

        UserModel::create([
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'nombre'    => $request->nombre,
            'apellidos' => $request->apellidos,
            'telefono'  => $request->telefono,
            'direccion' => $request->direccion,
            'ciudad'    => $request->ciudad,
            'role_id'   => $request->role_id,
        ]);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario creado con éxito');
    }

    public function edit(UserModel $usuario)
    {
        $roles = RoleModel::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    public function update(Request $request, UserModel $usuario)
    {
        $rules = [
            'email'     => 'required|email|unique:users,email,' . $usuario->id,
            'nombre'    => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono'  => 'required|string|max:50',
            'direccion' => 'required|string|max:255',
            'ciudad'    => 'required|string|max:100',
        ];

        if ($request->filled('password')) {
            $rules['password'] = 'required|min:6';
        }

        $data = $request->validate($rules);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
        $usuario->update($data);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(UserModel $usuario)
    {
        $usuario->delete();
        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario eliminado');
    }
}
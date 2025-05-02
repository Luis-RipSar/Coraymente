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
        return view('usuarios.create');
    }

    public function profesionalCreate()
    {
        $rol = RoleModel::findOrFail(2);
        return view('profesionales.create', compact('rol'));
    }

    public function store(Request $request)
    {
        $reglas = [
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6',
            'nombre'    => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono'  => 'required|string|max:50',
            'direccion' => 'string|max:255',
            'ciudad'    => 'string|max:100',
        ];

        if ($request->filled('role_id')) {
            $reglas['role_id'] = 'required|exists:roles,id';
        }

        $data = $request->validate($reglas);

        if (!$request->filled('role_id')) {
            $data['role_id'] = 3;
        }

        UserModel::create($data);

        if($data['role_id'] == 2){
            return redirect()
            ->route('admin.profesionales.index')
            ->with('success', 'Profesional creado con éxito');
        }
        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario creado con éxito');
    }

    public function edit(UserModel $usuario)
    {
        $roles = RoleModel::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    public function profesionalEdit(UserModel $usuario)
    {
        $roles = RoleModel::all();
        return view('profesionales.edit', compact('usuario', 'roles'));
    }

    public function update(Request $request, UserModel $usuario)
    {
        $rules = [
            'email'     => 'required|email|unique:users,email,' . $usuario->id,
            'nombre'    => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono'  => 'required|string|max:50',
            'direccion' => 'nullable|string|max:255',
            'ciudad'    => 'nullable|string|max:100',
        ];

        if ($request->filled('password')) {
            $rules['password'] = 'required|min:6';
        }

        $data = $request->validate($rules);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
        $usuario->update($data);

        if($usuario->role_id === 2){
            return redirect()
            ->route('admin.profesionales.index')
            ->with('success', 'Profesional actualizado con éxito');
        }
        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario actualizado con éxito');
    }

    public function destroy(UserModel $usuario)
    {
        if($usuario->role_id === 2){
            $usuario->delete();    
            return redirect()
                ->route('admin.profesionales.index')
                ->with('success', 'Profesional eliminado');
        }
        $usuario->delete();
        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario eliminado');
    }
}
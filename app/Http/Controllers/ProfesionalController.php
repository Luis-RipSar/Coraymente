<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfesionalController extends Controller
{
    public function index(Request $request)
    {
        $profesional = $request->user();
        $pacientes = $profesional->pacientes()->get();
        $citas = $profesional
        ->citas()
        ->with('usuario')
        ->orderBy('fecha', 'desc')
        ->get();

        return view('profesional.dashboard', compact('pacientes','citas'));
    }

    public function settings()
    {
        return view('profesional.perfil');
    }

    public function updatePerfil(Request $request)
    {
        $user = $request->user();

        $data = $request->validate([
            'nombre'    => ['required','string','max:50'],
            'apellidos' => ['required','string','max:100'],
            'email'     => ['required','email','max:255','unique:users,email,'.$user->id],
            'telefono'  => ['required','string','max:20'],
        ]);

        $user->update($data);

        return redirect()
            ->route('profesional.perfil')
            ->with('status', 'Perfil actualizado correctamente.');
    }

    // procesa el cambio de contraseña
    public function updatePassword(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'current_password'      => ['required','current_password'],
            'password'              => ['required','string','min:8','confirmed'],
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->route('profesional.perfil')
            ->with('statusPassword', 'Contraseña actualizada correctamente.');
    }
}

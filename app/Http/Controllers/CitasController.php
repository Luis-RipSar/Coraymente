<?php

namespace App\Http\Controllers;

use App\Models\CitaModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CitasController extends Controller
{
    public function index()
    {
        $citas = CitaModel::with(['usuario', 'profesional'])
                         ->orderBy('fecha', 'desc')
                         ->get();
        return view('admin.citas.index', compact('citas'));
    }

    public function create()
    {
        $usuarios = UserModel::where('role_id', '3')->get();
        $profesionales = UserModel::where('role_id', '2')->get();

        return view('admin.citas.create', compact('usuarios', 'profesionales'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_usuario'     => 'required|exists:users,id',
            'id_profesional' => 'required|exists:users,id',
            'sede'           => 'required|string|max:255',
            'sala'           => 'required|string|max:255',
            'fecha'     => 'required|date',
            'estado'         => 'required|in:pendiente,confirmada,cancelada',
            'motivo'         => 'required|string|max:255',
        ]);
        

        CitaModel::create($data);

        return redirect()->route('admin.citas.index')->with('success', 'Cita creada correctamente.');
    }

    public function update(Request $request)
    {
        if ($request->user()->role_id == 2) {
            // Si es un profesional, solo puede actualizar el estado
            $data = $request->validate([
                'estado' => 'required|in:pendiente,confirmada,cancelada',
                'id' => 'required|exists:citas,id'
            ]);

            // Actualizar SOLO el estado
            $cita = CitaModel::find($data['id']);
            $cita->updateQuietly([
                'estado' => $data['estado']
            ]);
        } 
        else if ($request->user()->role_id == 1){
            // Si es un administrador, puede actualizar fecha y estado
            $data = $request->validate([
                'fecha'  => 'required|date',
                'estado' => 'required|in:pendiente,confirmada,cancelada',
            ]);

            $data['fecha'] = Carbon::createFromFormat('Y-m-d\TH:i', $data['fecha'])
                                 ->toDateTimeString();
            
            CitaModel::where('id', $request->id)->update($data);
        }

        // Si el usuario es un profesional, redirigimos a su dashboard
        if ($request->user()->role_id == 2) {
            return redirect()->route('profesional.dashboard')->with('success', 'Cita actualizada correctamente.');
        }
        // Si el usuario es un admin, redirigimos a la lista de citas
        if ($request->user()->role_id == 1) {
            return redirect()->route('admin.citas.index')->with('success', 'Cita actualizada correctamente.');
        }
    }
}

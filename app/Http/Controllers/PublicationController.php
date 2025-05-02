<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    public function index() {
        $publicaciones = Publication::whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->paginate(6);
        return view('public.publicaciones', compact('publicaciones'));
    }

    public function show(Publication $publication) {
        return view('public.publicacion', compact('publication'));
    }

    // Nuevo método para admin
    public function adminIndex()
    {
        $publicaciones = Publication::orderByDesc('created_at')->get();

        return view('admin.publicaciones.index', compact('publicaciones'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'titulo'     => 'required|string|max:255',
        'resumen'    => 'required|string',
        'body'       => 'required|string',
        'imagen'     => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:40960',
    ]);

    // Si subieron imagen, muévela a public/imagenes/publicaciones
    if ($request->hasFile('imagen')) {
        $file     = $request->file('imagen');
        $filename = Str::random(4) . '_' . time() . '.' . $file->extension();
        $file->move(public_path('imagenes/publicaciones'), $filename);
        // Guardamos la ruta relativa en DB
        $data['image_url'] = 'imagenes/publicaciones/' . $filename;
    }

    // Creamos el UUID y el resto de campos
    $data['id'] = (string) Str::uuid();
    $data['published_at'] = now();

    Publication::create($data);

    return redirect()
        ->route('admin.publicaciones.index')
        ->with('success', 'Publicación creada con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

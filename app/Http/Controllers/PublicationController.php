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

    if ($request->hasFile('imagen')) {
        $file     = $request->file('imagen');
        $filename = Str::random(4) . '_' . time() . '.' . $file->extension();
        $file->move(public_path('imagenes/publicaciones'), $filename);
        $data['image_url'] = 'imagenes/publicaciones/' . $filename;
    }
    unset($data['imagen']);

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
    public function edit(Publication $publicacion)
    {
        return view('admin.publicaciones.edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'titulo'     => 'required|string|max:255',
            'resumen'    => 'required|string',
            'body'       => 'required|string',
            'imagen'     => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:40960',
        ]);

        if ($request->hasFile('imagen')) {
            $file     = $request->file('imagen');
            $filename = Str::random(4) . '_' . time() . '.' . $file->extension();
            $file->move(public_path('imagenes/publicaciones'), $filename);
            $data['image_url'] = 'imagenes/publicaciones/' . $filename;
        }else{
            $data['image_url'] = $request->image_url;
        }
        unset($data['imagen']);

        Publication::where('id', $request->id)->update($data);

        return redirect()
            ->route('admin.publicaciones.index')
            ->with('success', 'Publicación con título ' . $data['titulo'] . ', actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publicacion)
    {
        if ($publicacion->image_url) {
            $path = public_path($publicacion->image_url);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $publicacion->delete();

        return redirect()
            ->route('admin.publicaciones.index')
            ->with('success', 'Publicación con título "' . $publicacion->titulo . '", eliminada con éxito');
    }
}

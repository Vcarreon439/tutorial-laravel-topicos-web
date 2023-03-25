<?php

namespace App\Http\Controllers;

use App\Models\Artistas;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Artistas::all();
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return response(view('frmArtistas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $artista = new Artistas();
        $artista->nombre = $request->nombre;
        $artista->paterno = $request->paterno;
        $artista->materno = $request->materno;
        $artista->resena = $request->resena;
        $artista->save();
        return redirect()->route('artistas.index')->with('success', 'Artista agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        $artista = Artistas::find($id);
        return response(view('deleteArtista',compact('artista')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $artista = Artistas::find($id);
        return response(view('editArtista',compact('artista')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $artista = Artistas::find($request->id);
        $artista->nombre = $request->nombre;
        $artista->paterno = $request->paterno;
        $artista->materno = $request->materno;
        $artista->resena = $request->resena;
        $artista->save();
        return redirect()->route('artistas.index')->with('success', 'Artista actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $artistas = Artistas::find($id);
        $artistas->delete();
        return redirect()->route('artistas.index')->with('success', 'Artista eliminado correctamente');
    }
}

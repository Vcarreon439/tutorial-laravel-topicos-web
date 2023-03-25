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
        return view('welcome', compact('datos'));
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
    public function show(Artistas $artistas)
    {
        //
        return response(view('deleteArtista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artistas $artistas)
    {
        //
        return response(view('editArtista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artistas $artistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artistas $artistas)
    {
        //
    }
}

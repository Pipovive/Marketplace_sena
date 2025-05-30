<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;


class ciudadesController extends Controller
{
    public function index()
    {
        $data = Ciudad::all(); // <- Agrega esta línea

        return view('ciudades.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ciudades = new Ciudad();
        $ciudades->nombre = $request->nombre;
        $ciudades->estado = $request->estado;

        $ciudades->save();

        return redirect('ciudades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

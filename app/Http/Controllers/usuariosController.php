<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ciudad; 

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
       
        $usuarios = Usuario::with('ciudad')->get(); // Carga usuarios con ciudad
        $ciudades = Ciudad::all(); // Carga todas las ciudades
        // dd($data ->toArray());

        return view('usuarios.index', compact('usuarios','ciudades'));
    }//
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ciudades = Ciudad::all(); // Aquí sí estás trayendo las ciudades correctamente
        return view('usuarios.create', compact('ciudades'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->ciudad_id = $request->ciudad_id;

        $usuario->save();

        return redirect('usuarios');

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

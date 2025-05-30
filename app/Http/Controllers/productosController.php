<?php

namespace App\Http\Controllers;


use App\Models\Ciudad;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Usuario;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::with('categoria','usuario','ciudad')->get();;
        $categorias = Categoria::all();
        $usuarios = Usuario::all();
        $ciudades = Ciudad::all();


        return view('productos.index', compact('producto', 'categorias', 'usuarios','ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->slug = $request->slug;
        $producto->imagen = $request->imagen;
        $producto->valor = $request->valor;
        $producto->estado = $request->estado;
        $producto->estado_producto = $request->estado_producto;
        $producto->categoria_id = $request->categoria_id;
        $producto->usuario_id = $request->usuario_id;
        $producto->ciudad_id = $request->ciudad_id;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect('productos');
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

<?php

    use App\Http\Controllers\CategoriaController;
    use App\Http\Controllers\ciudadesController;
    use App\Http\Controllers\comentariosController;
    use App\Http\Controllers\productosController;
    use App\Http\Controllers\usuariosController;
   

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('layout');
});

    // Route::get('/categorias', [CategoriaController::class,'index']) ;

    Route::resource('categorias', CategoriaController::class);
    Route::resource('ciudades', ciudadesController::class);
    Route::resource('comentarios', comentariosController::class);
    Route::resource('productos', productosController::class);
    Route::resource('usuarios', usuariosController::class);
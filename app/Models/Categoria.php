<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{   
    public function producto() {
         return $this->belongsto(Producto::class);
    }
    public function usuarios()
    {
        return $this->belongsto(Usuario::class);
    }

    protected $fillable = ['nombre','slug','descripcion','imagen', 'estado'];
}

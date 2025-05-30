<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function categoria() {
         return $this->belongsTo(Categoria::class);
    }
    public function ciudad() {
         return $this->belongsTo(Ciudad::class);   
    }

    public function usuario() {
         return $this->belongsTo(Usuario::class);
    }


    protected $fillable = ['nombre', 'descripcion', 'valor', 'imagen', 'categoria_id'];
}

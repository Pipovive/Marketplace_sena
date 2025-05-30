<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    public function producto() {
         return $this->belongto(Producto::class);
    }

    protected $fillable = ['nombre', 'movile', 'email', 'password', 'rol', 'estado', 'ciudad_id'];
    use HasFactory;
}

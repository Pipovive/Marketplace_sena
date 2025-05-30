<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    public function usuarios()
    {
        return $this->belongto(Usuario::class);
    }
    
    
    protected $table = 'ciudades'; // Esto está correcto
    
    protected $fillable = ['nombre', 'estado'];
    
    // Si 'estado' es booleano, añade este cast
    
}
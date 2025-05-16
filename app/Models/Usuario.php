<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'movile', 'email', 'password', 'rol', 'estado', 'ciudad_id'];
    use HasFactory;
}

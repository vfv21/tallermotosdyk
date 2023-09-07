<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'celular', 'Id_Cliente'];
    public function cliente()
    {
    return $this->belongsTo(Cliente::class); // Un cliente pertenece a un mecanico
    }
   
}

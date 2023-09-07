<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido'];
 public function mecanicos()
 {
 return $this->hasMany(Mecanico::class); // Una categoria tiene muchos productos
 }
}


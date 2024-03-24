<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','descripcion'];
    public function categorias(){
        return $this->hasMany('App\Models\Categoria');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    /*
    protected $fillable = [
        'nombre', 
        'genero', 
        'visible', 
        'temporada',
        'imagen|image|max:2048',
        'activo', 
        'fechaEliminacion', 
        'destacado', 
        'novedad', 
        'numeroSerie'
    ];
    */

    protected $guarded = [];

    //Relacion muchos a muchos
    public function categorias(){
        return $this->belongsToMany('App\Models\Categoria');
    }

    public function marcas(){
        return $this->belongsToMany('App\Models\Marca');
    }

    public function colors(){
        return $this->belongsToMany('App\Models\Color');
    }

    public function tallas(){
        return $this->belongsToMany('App\Models\Talla', 'talla_producto');
    }
}

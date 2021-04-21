<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table= 'productos';

  protected $fillable = [
    'id',  'nombre', 'precio', 'marca_id', 'categoria_id'
  ];

  public function marcas(){

    return $this->belongsTo('app/Models/Marca');
  }
  
  public function categorias(){

    return $this->belongsTo('app/Models/Categoria');
  }
    
}

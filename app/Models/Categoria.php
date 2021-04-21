<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table= 'categorias';

    protected $fillable = [
    'id_categorias',  'nombre_categoria'
  ];

  public function productos(){

    return $this->hasMany('app/Models/Producto');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table= 'marcas';

    protected $fillable = [
    'id',  'nombre'
  ];

  public function producto(){

    return $this->hasMany('app/Models/Producto');
  }
}

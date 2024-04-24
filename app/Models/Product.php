<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //aca definimos los campo de la migration que seran rellenables
    protected $fillable = ['name', 'description', 'price', 'stock', 'image', 'id_categoria', 'id_marca'];

}

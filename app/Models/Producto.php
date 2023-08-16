<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\ProductoController;

class Producto extends Model
{
    protected $table = 'productos';
    use SoftDeletes;
    use HasFactory;
}

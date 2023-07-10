<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\AlmacenController;

class Almacen extends Model
{
    protected $table = 'almacens';
    use SoftDeletes;
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'nit', 'telefono', 'email', 'create_at', 'update_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $fillable = [
        'id',
        'nom_module',
        'nombre_heures',
        'id_prof',
        'id_admin',
        'created_at',
        'updated_at',
    ];
}

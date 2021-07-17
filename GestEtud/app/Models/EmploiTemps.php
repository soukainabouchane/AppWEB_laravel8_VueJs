<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploiTemps extends Model
{
    use HasFactory;
    protected $table = 'emploi_temps';
    protected $fillable = [
        'id',
        'filiere',
        'niveau',
       'id_admin',
        'id_salle',
        'created_at',
        'updated_at',
    ];
}

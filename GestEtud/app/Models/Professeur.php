<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $table = 'professeurs';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'cin',
        'sexe',
        'civilite',
        'situation_familiale',
        'mail',
        'date_naissance',
        'pays',
        'ville',
        'nationalite',
        'code_postal',
        'tel_fixe',
        'tel_portable',
        'mot_de_passe',
        'id_admin',
        'id_emp_temps',
        'created_at',
        'updated_at',
    ];
}

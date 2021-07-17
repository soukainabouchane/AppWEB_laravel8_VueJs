<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'sexe',
        'civilite',
        'situation_familiale',
        'date_naissance',
        'ville_nais',
        'nationalite',
        'pays_nais',
        'adresse',
        'tel_fixe',
        'tel_portable',
        'cin',
        'cne',
        'email',
        'password',
        'created_at',
        'updated_at',
        'id_admin',
        'id_pfe',
        'id_emp',
    ];
}

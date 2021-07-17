<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'cin',
        'email',
        'mot_de_passe',
        'created_at',
        'updated_at',
    ];
    
}

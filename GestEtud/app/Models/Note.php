<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'id',
        'note',
        'mention',
        'id_etudiant',
        'id_prof',
        'id_admin',
        'id_module',
        'created_at',
        'updated_at',
    ];
}

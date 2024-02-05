<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $fillable = [
        'numapogee','nom', 'prenom', 'datenaissance', 'adresse', 'telephon', 'email', 'password', 'moyenne',
    ];
    public function filiere()
    {
        return $this->belongsToMany(filiere::class, 'etudiantfiliere', 'etudiant_id', 'filiere_id');
        // return $this->belongsToMany(related:'App\Models\filiere', table:'etudiantfiliere', foreignPivotKey:'etudiant_id', relatedPivotKey:'filiere_id', relatedKey:'id',relatedKey:'id');
    }
}

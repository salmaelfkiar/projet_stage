<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    protected $table = 'filiere';
    protected $fillable = ['id','nom_filiere', 'ordre_choix','capasite'];


    // public function etudiants()
    // {
    //     return $this->hasMany(etudiantFiliere::class);
    // }
    public function etudiant()
    {
        return $this->belongsToMany(etudiant::class, 'etudiantfiliere', 'filiere_id', 'etudiant_id');
        // return $this->belongsToMany(related:'App\Models\etudiant', table:'etudiantfiliere', foreignPivotKey:'filiere_id', relatedPivotKey:'etudiant_id', relatedKey:'id',relatedKey:'id');
    }
}

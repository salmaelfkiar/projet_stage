<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiantfiliere extends Model
{
    protected $fillable = [
        'id','classement', 'etudiant_id', 'filiere_id',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}

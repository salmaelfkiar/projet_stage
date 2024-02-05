<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    protected $table = 'utilisateur';
    protected $fillable = ['email','password', 'droite'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    function etudiants(){
        return $this->belongsToMany(etudiant::class)->withPivot('note')->withPivot('observation');
    }
}

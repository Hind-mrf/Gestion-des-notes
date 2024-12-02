<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    function matieres(){
        return $this->belongsToMany(matiere::class)->withPivot('note')->withPivot('observation');
    }
}

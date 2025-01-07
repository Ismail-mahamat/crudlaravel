<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Depute extends Model
{
    
    use HasFactory;

    // Les colonnes que vous pouvez remplir par assignation de masse
    protected $fillable = [
        'nom',
        'prenom',
        'naissance',
        'sexe',
        'lieu',

        'salaire',
        'prime',
        
        'comission_id',
    ];
    public function comission()
{
    return $this->belongsTo(Comission::class);
}

}

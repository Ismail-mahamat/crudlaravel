<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Comission extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomc',
        'budget',
    ];
    public function comissions()
{
    return $this->hasMany(Comission::class);
}

}

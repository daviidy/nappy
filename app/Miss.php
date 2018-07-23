<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miss extends Model
{
    //
    protected $fillable = ['nom', 'prenoms', 'taille', 'nationalite', 'age', 'profession', 'image', 'nombre_de_votes'];

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}

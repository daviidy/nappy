<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
  protected $fillable = ['nombre_de_votes', 'miss_id'];

  public function miss()
  {
      return $this->belongsTo('App\Miss');
  }
}

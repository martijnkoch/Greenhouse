<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
  protected $fillable = [
    'gamename',
    'scenenumber',
    'clientname',
    'file'
  ];

  public $timestamps = false;

  public function game() {
      return $this->belongsTo(Game::class);
  }
}

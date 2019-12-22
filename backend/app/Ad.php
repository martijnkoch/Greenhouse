<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
  protected $fillable = [
    'game-name',
    'scene-number',
    'client-name',
    'file'
  ];

  public $timestamps = false;
}

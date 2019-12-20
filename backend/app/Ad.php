<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $primaryKey = 'gameName';

    protected $fillable = [
        'sceneNumber',
        'clientName',
        'fileName'
      ];

      public $timestamps = false;
}

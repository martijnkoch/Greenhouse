<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    // Create the one to many relationship for ads 
    public function ads() {
        return $this->hasMany(Ad::class);
    }

    // Create the one to many relationship for scenes 
    public function scenes() {
        return $this->hasMany(Scene::class);
    }
}

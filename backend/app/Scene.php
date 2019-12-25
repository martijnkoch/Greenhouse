<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $fillable = [
        'scene_id',
        'scene_title',
        'description'
    ];

    public function scene() {
        return $this->belongsTo(Scene::class);
    }
}

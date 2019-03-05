<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'is_feature'
    ];

    public function cvs()
    {
        return $this->belongsToMany(Cv::class);
    }
}

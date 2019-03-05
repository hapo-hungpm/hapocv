<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name', 'is_feature', 'title'
    ];

    public function education()
    {
        return $this->hasMany(Education::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'address', 'is_validated'
    ];

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }
}

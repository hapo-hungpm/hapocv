<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    const PROFESSIONAL_SKILL = 1;
    const PERSONAL_SKILL = 2;

    protected $fillable = [
        'name', 'type', 'is_feature',
    ];

    public function cvs()
    {
        return $this->belongsToMany(Cv::class)->withPivot('percent', 'type');
    }
}

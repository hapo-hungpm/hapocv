<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'start', 'end', 'position', 'work_content'
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

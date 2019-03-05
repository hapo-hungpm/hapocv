<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'start', 'end', 'position', 'achievement'
    ];

    public function cv()
    {
        $this->belongsTo(Cv::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'start', 'end', 'position', 'achievements', 'cv_id', 'school_id',
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

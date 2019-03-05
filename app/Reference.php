<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        'image', 'content',
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}

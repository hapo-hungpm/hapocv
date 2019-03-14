<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'name', 'start', 'end', 'customer', 'description' , 'team_size', 'position', 'responsibilities', 'technologies',
        'is_feature',
    ];
    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reference
 *
 * @property int $id
 * @property string $image
 * @property string $content
 * @property int $cv_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference whereCvId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reference whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Reference extends Model
{
    protected $fillable = [
        'image', 'content', 'cv_id',
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}

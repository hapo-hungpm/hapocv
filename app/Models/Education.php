<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Education
 *
 * @property int $id
 * @property int $start
 * @property int $end
 * @property string $position
 * @property string $achievements
 * @property int $school_id
 * @property int $cv_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\School $school
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereAchievements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereCvId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $is_verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $cvs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

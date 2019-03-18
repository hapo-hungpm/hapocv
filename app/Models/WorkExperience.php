<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkExperience
 *
 * @property int $id
 * @property int $start
 * @property int $end
 * @property string $position
 * @property string $work_content
 * @property int $company_id
 * @property int $cv_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereCvId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorkExperience whereWorkContent($value)
 * @mixin \Eloquent
 */
class WorkExperience extends Model
{
    protected $fillable = [
        'start', 'end', 'position', 'work_content', 'company_id', 'cv_id',
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

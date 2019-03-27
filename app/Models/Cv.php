<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cv
 *
 * @property int $id
 * @property string $cv_title
 * @property string $name
 * @property string $date_of_birth
 * @property string $phone
 * @property string $email
 * @property string $facebook
 * @property string $skype
 * @property string $chat_work
 * @property string $address
 * @property string $position
 * @property string $summary
 * @property string $image
 * @property string $image_mini
 * @property string $professional_skill_title
 * @property string $personal_skill_title
 * @property string $work_experience_title
 * @property string $education_title
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Education[] $educations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Portfolio[] $portfolios
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reference[] $references
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkExperience[] $workExperiences
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereChatWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereCvTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereEducationTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereImageMini($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv wherePersonalSkillTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereProfessionalSkillTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereSkype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cv whereWorkExperienceTitle($value)
 * @mixin \Eloquent
 */
class Cv extends Model
{
    protected $fillable = [
        'title', 'name', 'date_of_birth', 'phone', 'email', 'facebook', 'skype', 'chat_work', 'address', 'image',
        'position','summary', 'image_mini', 'professional_skill_title', 'personal_skill_title','work_experience_title',
        'education_title', 'status', 'user_id',
    ];

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class )->withPivot('percent');
    }

    public function workExperiences()
    {
        return $this->belongsToMany(WorkExperience::class);
    }

}

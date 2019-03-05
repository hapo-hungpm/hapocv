<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'date_of_birth', 'phone', 'email', 'facebook', 'skype', 'chatwork', 'address', 'image',
        'position','summary', 'image_mini', 'professional_skill_title', 'personal_skill_title','work_experience_title',
        'education_title'
    ];

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function reference()
    {
        return $this->hasMany(Reference::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

}

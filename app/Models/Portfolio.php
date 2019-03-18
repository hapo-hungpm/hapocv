<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Portfolio
 *
 * @property int $id
 * @property string $name
 * @property int $start
 * @property int $end
 * @property string $customer
 * @property string $description
 * @property string $team_size
 * @property string $position
 * @property string $responsibilities
 * @property string $technologies
 * @property int $is_feature
 * @property int $cv_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereCvId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereIsFeature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereResponsibilities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereTeamSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereTechnologies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
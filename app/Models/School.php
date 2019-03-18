<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\School
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property int $is_verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Education[] $education
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\School whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class School extends Model
{
    protected $fillable = [
        'name', 'is_feature', 'address',
    ];

    public function education()
    {
        return $this->hasMany(Education::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    const SUPER_ADMIN = 1;
    const ADMIN = 2;

    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    protected $guard = 'admin';
}

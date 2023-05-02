<?php

namespace Modules\Administration\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{

    use SoftDeletes, Notifiable, HasRoles;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $guard_name = 'web';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }




}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * user type
     */
    const USER_TYPE = 'user';

    /**
     * The attributes that are mass assignable.
     * @todo Remove type from database
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userAddress() {
        return $this->hasOne(UserAddress::class);
    }

    /**
     * @return string
     * return only User type
     */
    public static function getUserType() {
        return self::USER_TYPE;
    }
}

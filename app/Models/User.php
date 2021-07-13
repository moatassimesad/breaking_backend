<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;

    protected $table = 'userSettings';

    protected $primaryKey = 'uid';

    protected $fillable = [
        'user_karma',
        'image',
        'uemail',
        'username',
        'userphoto',
        'uwoman',
        'usfcm',
        'trusteduser',
        'ucountry',
        'utemps',
        'totalcomment',
        'totallikes',
        'totaldislikes',
        'verified',
        'lastconnect',
        'totalposts',
        'totalfollowers',
        'totalfollowing',
        'isspammer',
        'ban',
        'karma_refresh',
        'user_langue',
        'user_country',
        'usource',
        'u_public_key',
        'u_private_key',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

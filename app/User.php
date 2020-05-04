<?php

namespace App;

use App\Models\Attachment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    const ROLE = [
        'Admin'=>1,
        'Member'=>2,
        'Customer'=>3
    ];

    const STATUS=[
        'Active'=>1,
        'Inactive'=>2,
        'Expired'=>3,
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'avatar_id'
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


    public function avatar()
    {
        return $this->hasOne(Attachment::class, 'attachment_id', 'avatar_id');
    }
}

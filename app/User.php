<?php

namespace App;

use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\UserResetPassword;

class User extends Authenticatable
{

    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
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
   
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function authorizeRoles($role)
{
    abort_unless($this->hasAnyRole($role), 401);
    return true;
}
public function hasAnyRole($role)
{
    if (is_array($role)) {
        foreach ($role as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
    } else {
        if ($this->hasRole($role)) {
             return true; 
        }   
    }
    return false;
}
public function hasRole($role)
{
    if ($this->roles()->where('name', $role)->first()) {
        return true;
    }
    return false;
}

    public function sendPasswordResetNotification($token){
        $this->notify(new UserResetPassword($token));
            }
}

<?php

namespace App;

use App\role_user;
use App\User;
use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'user_id',
    ];
    protected $table ='role_user';

    
   /*  public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
    
    public function  users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    } */

}
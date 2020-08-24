<?php

namespace App;

use App\User;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description'
    ];

    protected $table ='roles';

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }


}

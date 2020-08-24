<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    //
    protected $fillable = [
        'name','created', 'created_at','update_at','description','user_id','code',
    ];
}

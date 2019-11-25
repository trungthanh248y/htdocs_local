<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    protected $table="users";
    public function comments(){
        return $this->hasMany('App/comments','userid','id');
    }
}

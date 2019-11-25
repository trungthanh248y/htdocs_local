<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $guarded=['id'];
    public function posts(){
        return $this->belongsToMany('App\Post','event_post');
    }
}

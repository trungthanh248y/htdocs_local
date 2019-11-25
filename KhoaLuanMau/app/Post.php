<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    
    protected $guarded=["id"];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function events(){
        return $this->belongsToMany('App\Event','event_post');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment', 'id_post');
    }
    public function items(){
        return $this->belongsToMany('App\Item','item_post');
    }
    public function rooms(){
        return $this->belongsToMany('App\Room','item_post');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table='rooms';
    protected $guarded=["id"];
    public function users()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }
//    public function temps(){
//        return $this->belongsToMany('App\Temp','temp_room');
//    }
    public function items(){
        return $this->belongsToMany('App\Item','item_post');
    }
    public function posts(){
        return $this->belongsToMany('App\Post','item_post');
    }
}

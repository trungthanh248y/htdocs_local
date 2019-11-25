<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    //
    protected $guarded=['id'];
    public function rooms(){
        return $this->belongsToMany('App\Room','temp_room');
    }
}

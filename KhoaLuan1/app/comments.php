<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    protected $table="comments";
    public function news(){
        return $this->belongTo('App/news','newsid','id');
    }
    public function users(){
        return $this->belongTo('App/users','userid','id');
    }
}

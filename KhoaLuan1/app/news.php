<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    protected $table="news";
    public function category(){
        return $this->belongsTo('App/category','catid','id');
    }
    public function comments(){
        return $this->hasMany('App/comments','newsid','id');
    }
}

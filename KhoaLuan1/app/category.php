<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table="category";
    
    public function news(){
        return $this->hasMany('App/news','catid','id');
    }
}

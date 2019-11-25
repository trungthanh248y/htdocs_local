<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table='posts';
    public function categories(){
        return $this->belongsToMany('App\Category','category_post');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded=['id'];
    protected $table='posts';
    public function users(){
        return $this->belongsTo('App\User','author_id','id');
    }
    public function categories(){
        return $this->belongsToMany('App\Category','category_post');
    }
}

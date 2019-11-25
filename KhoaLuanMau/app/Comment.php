<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $guarded=['id'];
    public function users(){
        return $this->belongsTo('App\User','id_user');
    }
    public function posts(){
        return $this->belongsTo('App\Post','id_post');
    }
}

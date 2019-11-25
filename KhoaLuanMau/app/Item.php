<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Item extends Model
{
    //
    protected $guarded=['id'];
    public function posts(){
        return $this->belongsToMany('App\Post','item_post');
    }
    public function rooms(){
        return $this->belongsToMany('App\Room','item_post');
    }
}

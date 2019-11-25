<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Studet extends Model
{
    //
    protected $table="students";
    protected $guarded=['id'];
    public $timestamps=null;
}

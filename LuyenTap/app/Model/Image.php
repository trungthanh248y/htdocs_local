<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table='images';
    // protected $guarded=['id'];
    protected $guarded = ['id'];
}

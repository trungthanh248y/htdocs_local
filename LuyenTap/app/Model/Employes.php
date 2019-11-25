<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    //
    protected $table="employess";
    protected $guarded=['id'];

    public function students()
    {
        return $this->hasMany('App\Model\Student','employess_id','id');
    }
}

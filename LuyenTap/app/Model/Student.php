<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table='students';
    protected $guarded=['id'];

    public function employess()
    {
        return $this->belongsTo('App\Model\Employes', 'employess_id', 'id');
    }
}

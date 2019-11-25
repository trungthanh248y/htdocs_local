<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded=['id'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Group', 'groups_id', 'id');
    }
    public function subjects(){
       return $this->belongsToMany('App\Subject','student_subjects');
    }
}

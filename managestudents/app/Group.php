<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $guarded = ['id'];

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'groups_id', 'id');
    }
}

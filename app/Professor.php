<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //

    /**
     * Get all of the sections for professor
     *
     */
    public function sections()
    {   
        return $this->hasMany('App\Section');
    } 


    /**
     * Get all of the courses for professor
     * 
     */
    public function courses()
    {
        return $this->hasManyThrough('App\Course', 'App\Section');
    }
}

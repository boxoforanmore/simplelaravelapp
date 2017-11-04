<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    /**
     * Get all of the sections for course
     *
     */
    public function sections()
    {   
        return $this->hasMany('App\Section');
    } 

    /** 
     * Get all of the professors for course
     * 
     */
    public function professors()
    {   
        return $this->hasManyThrough('App\Professor', 'App\Section');
    } 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    public function professor()
    {
        return $this->belongsTo('App\Professor');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}

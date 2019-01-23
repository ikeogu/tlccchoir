<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NorthernStates extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\NorthernStates');
    }
}

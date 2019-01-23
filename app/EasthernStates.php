<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EasthernStates extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\EasthernStates');
    }
}

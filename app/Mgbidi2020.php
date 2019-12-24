<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mgbidi2020 extends Model
{
    //
    protected $fillable = [
        'firstname','lastname', 'email','phone', 'school', 'state', 'gender','health_status', 'p_uniform',
        'm_uniform', 'w_uniform','o_uniform', 'b_uniform','n_uniform', 'ties','comment','new_uniform','food_item'
    ];

}

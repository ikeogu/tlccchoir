<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\ Provider as Authenticatable;


class Mgbidi extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'passport','firstname','lastname', 'email','phone', 'school', 'state', 'gender','health_status', 'p_uniform',
        'm_uniform', 'w_uniform','o_uniform', 'b_uniform','n_uniform', 'ties','comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'discipline', 'gender', 'state',
        'institution','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function songs()
    {
      return $this->hasMany('App\SongPresentation');
    }

   public function role(){
        return $this->belongsTo('App\Role');
    }
    public function posts()
    {
    return $this->hasMany(Post::class);
    }
}

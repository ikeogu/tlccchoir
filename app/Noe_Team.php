<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noe_Team extends Model
{
    protected $fillable = [
        'name', 'number', 'state', 'african_class', 'african_con', 'acappella',
    ];

    public function musics(){
        return $this->hasMany(Music::class);
    }

}

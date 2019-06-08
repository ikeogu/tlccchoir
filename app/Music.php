<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
         'african_class_song', 'african_con_song', 'acappella_song','african_class_lyrics','african_con_lyrics','acappella_lyrics', 
    ];

    public function team(){
        return $this->belongsTo(Noe_Team::class,'id');
    }

}

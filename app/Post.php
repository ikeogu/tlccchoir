<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['title', 'body']; // whitelist
    // protected $guarded = []; // blacklist

    public function comments()
    {
        // return $this->hasMany('App\Comment');
        return $this->hasMany(Comment::class);
    }

    public function addComment($body, $user)
    {
        $this->comments()->create(compact('body','user'));
        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $this->id
        // ]);
    }
}

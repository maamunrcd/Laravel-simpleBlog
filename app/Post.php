<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Model {

    // We use protected $fillable=['title','body'];
    protected $guarded = [];

    //if we use guarded every single post do this global. create a model file app directory...... and use it.
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    //Add command
    public function addComment($body) {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => auth()->id()
        ]);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

}

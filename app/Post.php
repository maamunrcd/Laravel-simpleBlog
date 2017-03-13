<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

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


    //Filter data for archive
    public function scopeFilter($query, $filters){
        if($month = $filters['month']){
            $query->whereMonth('created_at',carbon::parse($month)->month);
        }
        if($year = $filters['year']){
            $query->whereYear('created_at',$year);
        }
    }
    public static function archives(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)')
            ->get()
            ->toArray();
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }


}

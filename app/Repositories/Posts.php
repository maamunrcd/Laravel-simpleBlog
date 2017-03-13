<?php
 namespace App\Repositories;

 use App\Post;
 use App\Redis;
 class Posts{
     protected $Redis;
     public function __construct(Redis $redis){
        $this->redis=$redis;
     }

     public function all(){
         return Post::all();
     }
 }
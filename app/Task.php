<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incompleat(){
        /*Creat Custom modal method get_by_id*/
        return static::where('compleat',0)->get();
    }
    
    /*Get all data form table using trigger*/
    public static function getAll(){
        return Task::all();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //use it globally every single post / model
    protected $guarded=[];
}

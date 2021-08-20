<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
     protected $guarded = array('id');
    
    public static $rules = array(
       'start' => 'required',
        'end' => 'required',
    );
}

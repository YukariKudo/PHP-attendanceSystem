<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dayoff extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
       'start' => 'required',
        'end' => 'required',
        'type'=> 'required',
        'memo' => 'required',
    );
    
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}


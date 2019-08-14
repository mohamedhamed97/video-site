<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    function user(){
        return $this->belongsTo('User' , 'user_id');
    }
}

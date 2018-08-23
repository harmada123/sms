<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
}

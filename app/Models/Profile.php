<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    public function addresses(){
    return $this->hasMany('App\Models\Address');
    }
}

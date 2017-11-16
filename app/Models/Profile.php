<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    public function addresses(){
    return $this->hasMany('App\Models\Address');
    }
    public function special_needs(){
     return $this->belongsToMany('App\Models\SpecialNeed');
    }
}

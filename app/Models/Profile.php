<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    public function adresses(){
        return $this->belongsTo('App\Models\Profile');
    }
    public function spcialsneeds(){
        return $this->belongsToMany('App\Models\SpecialNeed');
    }
}
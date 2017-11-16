<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model{
    public function profiles(){
        return $this->hasMany('App\Models\Address');
    }
}

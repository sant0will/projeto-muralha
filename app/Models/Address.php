<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model{
    public function profiles(){         
    return $this->belongsTo('App\Models\Profile');
    }
}

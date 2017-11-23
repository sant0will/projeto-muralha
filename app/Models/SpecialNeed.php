<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialNeed extends Model{
    public function profiles(){
        return $this->belongsToMany('App\Models\Profile')->withPivot('permanente','observacao');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    public function selectiveprocess(){
        return $this->belongsToMany('App\Models\SelectiveProcess')->withPivot('vagas');
    }

	public function subscriptions(){
		return $this->hasMany('App\Models\Subscription');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectiveProcess extends Model
{
    public function quotas(){
        return $this->belongsToMany('App\Models\Quota');
    }

    public function courses(){
        return $this->belongsToMany('App\Models\Course');
    }

	public function subscriptions(){
		return $this->hasMany('App\Models\Subscription');
	}
}

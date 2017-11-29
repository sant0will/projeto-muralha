<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function exemptions(){
		return $this->hasOne('App\Models\Exemption');
	}

	public function profiles(){
		return $this->belongTo('App\Models\Profile');
	}

	public function selectiveprocess(){
		return $this->belongTo('App\Models\SelectiveProcess');
	}

	public function courses(){
		return $this->belongTo('App\Models\Course');
	}

	public function quotas(){
		return $this->belongTo('App\Models\Quota');
	}
}

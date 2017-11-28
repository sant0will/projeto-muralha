<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exemption extends Model
{
    public function subscriptions(){
		return $this->belongTo('App\Models\Subscription');
	}
}

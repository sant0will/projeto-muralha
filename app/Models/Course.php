<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = [
	 'vagas',
	];

    public function selectiveprocess(){
        return $this->belongsToMany('App\Models\SelectiveProcess')->withPivot('vagas');
    }

	public function subscriptions(){
		return $this->hasOne('App\Models\Subscription');
	}
}

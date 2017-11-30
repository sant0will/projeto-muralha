<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
	
	protected $fillable = [
	'nome',
	'rg',
	'emissor_rg',
	'cpf',
	'sexo',
	'nome_pai',
	'nome_mae',
	'passaporte',
	'naturalidade',
	'telefone',
	'celular',
	'escolaridade'
	];

	public function user(){
		return $this->belongsTo('App\Models\User');
	}

	public function address(){
		return $this->hasOne('App\Models\Address');
	}

	public function specialNeeds(){
		return $this->belongsToMany('App\Models\SpecialNeed')->withPivot('permanente','observacao')->withTimestamps();
	}

	public function subscriptions(){
		return $this->hasMany('App\Models\Subscription');
	}
	
}
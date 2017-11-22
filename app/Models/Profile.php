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
	'telfone',
	'celular',
	'escolaridade'
	];

	public function address(){
		return $this->hasOne('App\Models\Address');
	}
	public function specialneeds(){
		return $this->belongsToMany('App\Models\SpecialNeed');
	}
	public function user(){
		return $this->hasOne('App\Models\User');
	}
}
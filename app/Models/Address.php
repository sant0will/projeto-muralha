<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model{
	
	protected $fillable = [
	'rua',
	'numero',
	'cep',
	'bairro',
	'complemento',
	'tipo',
	'cidade',
	'estado',
	'pais',
	];

	public function profiles(){
		return $this->hasMany('App\Models\Address');
	}
}

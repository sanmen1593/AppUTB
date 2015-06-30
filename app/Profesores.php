<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model {

	protected $fillable = ['nombre', 'apellido', 'codigo', 'email'];

	public function curso(){
		return $this->hasMany('App\Cursos', 'profesor_id');
	}
}

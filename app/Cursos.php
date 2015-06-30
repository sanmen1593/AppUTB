<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profesores;

class Cursos extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'descripcion', 'periodo', 'año', 'fecha_inicio', 'profesor_id'];

	public function profesor(){
		return $this->belongsTo('App\Profesores');
	}
}

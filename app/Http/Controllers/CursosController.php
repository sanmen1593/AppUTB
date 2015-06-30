<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cursos;
use App\Profesores;
use Illuminate\Http\Request;

class CursosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cursos = Cursos::all();
		return view('cursoslist')->with(['cursos' => $cursos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$profesores = Profesores::all();
		return view('cursoscreate')->with(['profesores' => $profesores]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules = [
		    'nombre' => 'required|min:5',
		    'descripcion' => 'required|min:5',
		    'periodo' => 'required|min:1',
		    'año' => 'required',
		    'fecha_inicio' => 'required|date'
    	];

		$this->validate($request, $rules);
		
		$curso = Cursos::create($request->all());
		if($curso){
			return redirect('cursos');
		} 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$curso = Cursos::find($id);
		return view('curso')->with(['curso' => $curso]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

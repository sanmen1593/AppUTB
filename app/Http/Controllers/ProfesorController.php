<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profesores;
use Illuminate\Http\Request;

class ProfesorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profesores = Profesores::all();
		return view('profesoreslist')->with(['profesores' => $profesores]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('profesorescreate');
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
		    'apellido' => 'required|min:5',
		    'codigo' => 'required|min:9|unique:profesores',
		    'email' => 'required|email|unique:profesores'
    	];
		$this->validate($request, $rules);
		$profesor = Profesores::create($request->all());
		if($profesor){
			return redirect('profesores');
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
		$profesor = Profesores::find($id);
		return view('profesor')->with(['profesor' => $profesor]);
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

+<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller {


	public function index()
	{
		$campus = Campus::all(); // Cambiar esto, si la db es muy grande queda la escoba
		return view('campus.index')
			->with('campus', $campus);
	}

	public function create()
	{
		return view('campus.create');
	}


	public function store()
   {
		$data = Input::
	}

	public function show($id)
	{
	  $campus = Campus::find($id);
	   if($campus)
	  return view('campus.show')->with('campus', $campus);
	   else
  			abort(404);
   }

	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
   {
		//
	}

}
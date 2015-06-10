<?php namespace App\Http\Controllers;




class HorariosController extends Controller {


	protected $layout='Layout.estudiantes';

	protected $layout='Layout.docentes';


	public function getHorariosEstudiantes()
	{
		return view('Estudiantes/horariosEstudiantes');
	}

	public function getHorariosDocentes()
	{
		return view('Docentes/HorariosDocentes');
	}

}
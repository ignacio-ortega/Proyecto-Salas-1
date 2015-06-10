<?php namespace App\Http\Controllers;




class ConsultaController extends Controller {


	protected $layout='Layout.docentes';

	protected $layout='Layout.estudiantes';



	public function getconsultaEstudiantes()
	{
		return view('/Estudiantes/consultasEstudiantes');
	}

	public function getconsultaDocentes()
	{
		return view('/Docentes/consultasDocentes');
	}


}

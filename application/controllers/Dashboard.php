<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 	
 	private $controller;

	public function __construct()
        {
            parent::__construct();
            $this->controller = strtolower(get_class()) ;

        }

	//Cargar la vista
	public function index()
	{


		
		$data["view"] = $this->controller.'/load_dashboard';
		$this->load->view($this->controller.'/layout_index',$data);
		

	}
	//Guardar informacion en la base de datos
	public function store()
	{
		
	}
	//Muestra un determinado registro
	public function show()
	{
		
	}
	//Crear
	public function create()
	{
	
	}
	//Cargar el formulario de editar
	public function edit()
	{
		
	}
	//Actualizar la informacion
	public function update()
	{
		
	}
	//Eliminar un determinado registro
	public function destroy()
	{
		
	}

}

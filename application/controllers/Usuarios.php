<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	private $controller;

	public function __construct()
    {
 

        // Call the CI_Controller constructor
        parent::__construct();




        $this->controller = strtolower(get_class()) ;

        $this->load->model("Usuarios_model");
	}    

 
	//Guardar informacion en la base de datos
	public function store()
	{
		
	}
	//Muestra un determinado registro
	public function show()
	{
 

		$data["controller"] = $this->controller;

		$data["view"] = 'master/'.$this->controller.'/load_list';

		$this->load->view('dashboard/layout_index',$data);
		
	}
	//Crear
	public function create()
	{
		$data["controller"] = $this->controller;

		$data["view"] = 'master/'.$this->controller.'/load_add';

		$this->load->view('dashboard/layout_index',$data);

	
	}
	//Cargar el formulario de editar
	public function edit()
	{
		$data["controller"] = $this->controller;

		$data["view"] = 'master/'.$this->controller.'/load_edit';
		
		$this->load->view('dashboard/layout_index',$data);
		
	}
	//Actualizar la informacion
	public function update()
	{
		
	}
	//Eliminar un determinado registro
	public function destroy()
	{
		echo "<h1>ESTOS ES PARA ELIMINAR CASHATE</h1>";
	}
	public function registro()
	{


	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	private $controller;

	public function __construct()
    {


        // Call the CI_Controller constructor
        parent::__construct();

        $this->controller = strtolower(get_class()) ;

        $this->load->model("Clientes_model");
	}    

 
	//Guardar informacion en la base de datos
	public function store()
	{
		$_post = $this->input->post();

		
		$_result =  $this->Clientes_model->add($_post );

		if ($_result) 
			redirect($this->controller.'/show');
		else
			exit(json_encode(array('status'=>FALSE,'message'=>'Error al registrar los datos')));

	}
	//Muestra un determinado registro
	public function show()
	{

		$data["controller"] = $this->controller;

		$data['items'] = $this->Clientes_model->get();

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
	public function edit($id)
	{
		if (!is_numeric($id)) 
			 redirect($this->controller.'/show');

var_dump($this->Clientes_model->get_by_id($id));

		if (!$this->Clientes_model->get_by_id($id)) {
			 exit(json_encode(array('status'=>FALSE,'message'=>'id no registrado')));
		}


			
		
		

		$data["controller"] = $this->controller;
		$data["id"] = $id;

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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
        {
            // Call the CI_Controller constructor
            parent::__construct();
        }

	//Cargar la vista
	public function index()
	{
		$data['title']= "bienvenido al home";
		$data['meses']= ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'];
		$datos = $this->db->select("*")->get('juegos')->result();
		$data['datos']= $datos;
		//echo "<PRE>";
		var_dump($datos);
		//echo "</PRE>";
		$this->load->view('home',$data);
		

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
	public function create($nombre, $edad)
	{
	
		echo 'Mi nombre es '.$nombre." mi edad es ".$edad;
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

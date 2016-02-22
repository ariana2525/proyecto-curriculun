<?php 

/**
* Clase Platos_model
*/
class Platos_model extends CI_Model
{
	
	
	public function __construct()
        {
            // Call the CI_Model constructor
            parent::__construct();
        }
    //agregar registros
    public function add($_post)
    {
    	if (empty($_post)) {
    		return false;
    	}
    	return $this->db->insert("platos",$_post);
    }
    //actualizar registros
    public function update($_post,$id)
    {
    	if (empty($_post)) {
    		return false;
    	}
    	if (is_numeric($id)) {
    		return false;
    	}
    	return $this->db->where("id",$id)->update("platos",$_post);
    }
    //listado de registros
    public function get()
    {
    	return $this->db->where("estado!=",99)->get("platos")->result();	
    }
    //busqueda de un registro
    public function get_by_id($id)
    {
    	if (is_numeric($id)) {
    		return false;
    	}
    	return $this->db->where("id",$id)->get("platos")->row();
    }
}


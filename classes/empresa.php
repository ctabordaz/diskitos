<?php
 
class empresa extends object_standard
{
	//attributes
	protected $nit;
	protected $nombre;
	protected $telefono;
	protected $direccion;
	protected $correo;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
            return array("nit" => array(),
                        "nombre" => array(),
                        "telefono" => array(),
                        "direccion" => array(),
                        "correo" => array());
    }

	public function primary_key()
	{
		return array("nit");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{		
		    default:
			break;
		}
	}
}

?>
<?php
 
class encabezado extends object_standard
{
	//attributes
	protected $factura;
	protected $fecha;
	protected $cliente;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("factura" => array("foreign_name" => "e_f", "foreign" => "factura", "foreign_attribute" => "codigo"),
                    "fecha" => array(),
                    "cliente" => array("foreign_name" => "c_e", "foreign" => "cliente", "foreign_attribute" => "cedula")); 
	}

	public function primary_key()
	{
		return array("factura");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{	
                    
                    case "cliente":
				switch($rel_name)
				{
					case "c_e":
					return array("cliente");
					break;
				}
                    case "factura":
				switch($rel_name)
				{
					case "e_f":
					return array("factura");
					break;
				}
		    default:
			break;
		}
	}
}

?>
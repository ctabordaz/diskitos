<?php
 
class factura extends object_standard
{
	//attributes
	protected $codigo;
	protected $cajero;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("codigo" => array(), "cajero" => array("foreign_name" => "c_f", "foreign" => "cajero", "foreign_attribute" => "cedula")); 
	}

	public function primary_key()
	{
		return array("codigo");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{	
                    
                    case "cajero":
				switch($rel_name)
				{
					case "c_f":
					return array("cajero");
					break;
				}
		    default:
			break;
		}
	}
}

?>
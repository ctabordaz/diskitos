<?php
 
class detalle extends object_standard
{
	//attributes
	protected $factura;
	protected $edicion;
	protected $cantidad;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("factura" => array("foreign_name" => "d_f", "foreign" => "factura", "foreign_attribute" => "codigo"),
                    "edicion" => array("foreign_name" => "d_e", "foreign" => "edicion", "foreign_attribute" => "codigo_de_barras"),
                    "cantidad" => array()); 
	}

	public function primary_key()
	{
		return array("factura","edicion");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{	
                    
                    case "edicion":
				switch($rel_name)
				{
					case "d_e":
					return array("edicion");
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
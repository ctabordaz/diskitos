<?php
	class pedido extends object_standard
	{
		//atribute variables
		protected $codigo;
		protected $fecha;
		protected $precio;
                protected $proveedor;
		protected $empleado;
		
		//components
		var $components = array();
		
		//auxiliars for primary key and for files
		var $auxiliars = array();
		
		//data about the attributes

		

		public function metadata()
		{
			return array(
                            "codigo" => array(), 
                            "fecha" => array(), 
                            "precio" => array(), 
                            "empleado" => array("foreign_name" => "a_em", "foreign" => "empleado", "foreign_attribute" => "cedula"));
		}
		
		public function primary_key()
		{
			return array("codigo");
		}
		
		public function relational_keys($class, $rel_name)
		{
			switch($class)
			{
				case "empleado":
				switch($rel_name)
				{
					case "a_em":
					return array("empleado");
					break;
				}
				default:
				break;
			}
		}
		
	}

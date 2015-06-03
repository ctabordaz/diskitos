<?php
	class encargo extends object_standard
	{
		//atribute variables
		protected $codigo;
		protected $fecha;
		protected $titulo_enc;
		protected $interprete_enc;
                protected $formato_enc;
                protected $cliente;
		
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
                            "titulo_enc" => array(), 
                            "interprete_enc" => array(),
                            "formato_enc" => array(),
                            "cliente" => array("foreign_name" => "c_e", "foreign" => "cliente", "foreign_attribute" => "cedula"));
		}
		
		public function primary_key()
		{
			return array("codigo");
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
				default:
				break;
			}
		}
		
	}

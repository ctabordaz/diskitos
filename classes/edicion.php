<?php
	class edicion extends object_standard
	{
		//atribute variables
		protected $codigo_de_barras;
		protected $formato;
		protected $cantidad;
		protected $precio;
                protected $album;
		
		//components
		var $components = array();
		
		//auxiliars for primary key and for files
		var $auxiliars = array();
		
		//data about the attributes

		public function metadata()
		{
			return array(
                            "codigo_de_barras" => array(), 
                            "formato" => array(), 
                            "cantidad" => array(), 
                            "precio" => array(), 
                            "album" => array("foreign_name" => "a_e", "foreign" => "album", "foreign_attribute" => "nro_catalogo"));
		}
		
		public function primary_key()
		{
			return array("codigo_de_barras","album");
		}
		
		public function relational_keys($class, $rel_name)
		{
			switch($class)
			{
				case "album":
				switch($rel_name)
				{
					case "a_e":
					return array("album");
					break;
				}
				default:
				break;
			}
		}
		
	}

<?php
	class cancion extends object_standard
	{
		//atribute variables
		protected $consecutivo;
		protected $nombre;
		protected $compositor;
		protected $duracion;
                protected $album;
		
		//components
		var $components = array();
		
		//auxiliars for primary key and for files
		var $auxiliars = array();
		
		//data about the attributes

		

		public function metadata()
		{
			return array(
                            "consecutivo" => array(), 
                            "nombre" => array(), 
                            "compositor" => array(), 
                            "duracion" => array(), 
                            "album" => array("foreign_name" => "a_c", "foreign" => "album", "foreign_attribute" => "nro_catalogo"));
		}
		
		public function primary_key()
		{
			return array("consecutivo");
		}
		
		public function relational_keys($class, $rel_name)
		{
			switch($class)
			{
				case "album":
				switch($rel_name)
				{
					case "a_c":
					return array("album");
					break;
				}
				default:
				break;
			}
		}
		
	}

<?php
	class envio extends object_standard
	{
		//atribute variables
		protected $fecha;
		protected $pedido;
                protected $edicion_barras;
		protected $edicion_alb;
		
		//components
		var $components = array();
		
		//auxiliars for primary key and for files
		var $auxiliars = array();
		
		//data about the attributes

		

		public function metadata()
		{
			return array(
                            "fecha" => array(), 
                            "pedido" => array("foreign_name" => "p_en", "foreign" => "pedido", "foreign_attribute" => "codigo"), 
                            "edicion_barras" => array("foreign_name" => "e_eb", "foreign" => "edicion", "foreign_attribute" => "codigo_de_barras"),
                            "edicion_alb" => array("foreign_name" => "e_ea", "foreign" => "edicion", "foreign_attribute" => "album"));
		}
		
		public function primary_key()
		{
			return array("pedido", "edicion_barras", "edicion_alb");
		}
		
		public function relational_keys($class, $rel_name)
		{
			switch($class)
			{
				case "pedido":
				switch($rel_name)
				{
                                    case "p_en":
					return array("pedido");
					break;
				}
                                case "edicion":
				switch($rel_name)
				{
                                    case "e_eb":
					return array("edicion_barras");
					break;
                                    case "e_ea":
					return array("edicion_alb");
					break;
				}
				default:
				break;
			}
		}
		
	}

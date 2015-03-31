<?php
class album extends object_standard{
	protected $titulo;
	protected $interprete;
	protected $nro_catalogo;
	protected $pais_origen;
        protected $disquera;
        protected $ano_publicacion;
        protected $genero;
        protected $caratula;

	var $components = array();
	var $auxiliars = array();
	
	public function metadata() {
            return array(
                "titulo" => array(), 
                "interprete" => array(), 
                "nro_catalogo" => array(),
                "pais_origen" => array(),
                "disquera" => array(),
                "ano_publicacion" => array(),
                "genero" => array(),
                "caratula" => array()
            );
	}
	public function primary_key(){
            return array("nro_catalogo");
	}
	
	public function relational_keys($class, $rel_name){
		
            switch ($class){
                default:
                break;
            }
	}
}
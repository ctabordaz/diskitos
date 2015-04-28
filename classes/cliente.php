<?php
class cliente extends object_standard{
    protected $cedula;
    protected $nombre;
    protected $telefono;
    protected $direccion;
    protected $correo;
    
    var $components = array();
    var $auxiliars = array();
    
    public function metadata(){
        return array(
            "cedula" => array(),
            "nombre" => array(),
            "telefono" => array(),
            "direccion" => array(),
            "correo" => array(),
        );
    }
    public function primary_key(){
		return array("cedula");
    }
	
    public function relational_keys($class, $rel_name){
		
		switch ($class){
			default:
			break;
		}
    }
}
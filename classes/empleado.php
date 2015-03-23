<?php
class empleado extends object_standard{
    protected $cedula;
    protected $nombre;
    protected $contraseña;
    protected $salario;
    protected $telefono;
    protected $correo;
    protected $tipo;
    
    var $components = array();
    var $auxiliars = array();
    
    public function metadata(){
        return array(
            "cedula" => array(),
            "nombre" => array(),
            "contraseña" => array(),
            "salario" => array(),
            "telefono" => array(),
            "correo" => array(),
            "tipo" => array()            
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
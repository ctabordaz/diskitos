<?php

require('configs/include.php');

class c_iniciarsesion extends super_controller {

	public function display()
	{		
		$cod['empleado']['cedula']=2;	
		$options['empleado']['lvl2']= "login";
		$this->orm->connect();
		$this->orm->read_data(array("empleado"), $options,$cod);
		$empleado = $this->orm->get_objects("empleado");
		$this->orm->close();
		
		$this->engine->assign('emp',$empleado[0]);
		$this->engine->display('iniciarsesion.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_iniciarsesion();
$call->run();

?>
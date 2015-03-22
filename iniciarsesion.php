<?php

require('configs/include.php');

class c_iniciarsesion extends super_controller {

	public function display()
	{		
		
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
<?php

require('configs/include.php');

class c_ingresarediciones extends super_controller {

	public function display()
	{		
		$this->engine->assign('title',"Ingresar Ediciones");
		
		$this->engine->display('headerd.tpl');
		$this->engine->display('ingresarediciones.tpl');
		$this->engine->display('footerd.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_ingresarediciones();
$call->run();

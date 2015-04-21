<?php

require('configs/include.php');

class c_cerrarsesion extends super_controller {

        public function display()
	{	
            $_SESSION = NULL;
            $this->session = $_SESSION;
            
            $this->engine->display('iniciarsesion.tpl');
	}
	
	public function run()
	{
            $this->display();			
	}
}

$call = new c_cerrarsesion();
$call->run();


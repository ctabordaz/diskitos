<?php

require('configs/include.php');

class c_iniciarsesion extends super_controller {

        protected $empleado;
        
        public function login(){
           
                
                $cod['empleado']['cedula']= $this->post->cedula;
                $cod['empleado']['contraseña']= $this->post->contraseña;
		$options['empleado']['lvl2']= "login";
		$this->orm->connect();
		$this->orm->read_data(array("empleado"), $options,$cod);
		$empleado = $this->orm->get_objects("empleado");
                $this->engine->assign('emp',$empleado[0]);
                

		$this->orm->close();
		
		

        }

        public function display()
	{		
		
			
		$this->engine->display('iniciarsesion.tpl');
	    
	}
	
	public function run()
	{
           if(isset($this->post->option)){
               $this->{$this->post->option}();
               
              
           }
           $this->display();
		
	}
}

$call = new c_iniciarsesion();
$call->run();


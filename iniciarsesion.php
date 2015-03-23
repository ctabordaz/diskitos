<?php

require('configs/include.php');

class c_iniciarsesion extends super_controller {

        protected $empleado;
        protected $temp;


        public function login(){
           
                
                $cod['empleado']['cedula']= $this->post->cedula;
                $cod['empleado']['contraseña']= $this->post->contraseña;
		$options['empleado']['lvl2']= "login";
		$this->orm->connect();
		$this->orm->read_data(array("empleado"), $options,$cod);
		$this->empleado = $this->orm->get_objects("empleado");
                $this->engine->assign('emp',$this->empleado[0]);
                $this->orm->close();
		
                if (empty($this->empleado[0])){
			throw_exception($this->gvar['m_incorrect_login']);
		}else{
                if($this->empleado[0]->get('tipo')=='C') {
			$this->temp='footer.tpl';
			//echo'Cliente';
		}
		else if ($this->empleado[0]->get('tipo')=='A'){
			$this->temp='header.tpl';
			//echo'Admin';
		}
                }
		

        }

        public function display()
	{		
		
			
		if(is_object($this->empleado[0])){
			$this->engine->display($this->temp);
			
		}
		else {
                    $this->engine->assign('id',  $this->post->cedula);
                    $this->engine->display('iniciarsesion.tpl');
	    }
	    
	}
	
	public function run()
	{
          	try{
			if (isset($this->post->option)){
				$this->{$this->post->option}();
			}
		}
		catch (Exception $e){
			$this->error=1; $this->msg_warning=$e->getMessage(); $this->temp_aux = 'message.tpl';
		    $this->engine->assign('type_warning',$this->type_warning); $this->engine->assign('msg_warning',$this->msg_warning);}
		    $this->display();
		
	}
}

$call = new c_iniciarsesion();
$call->run();


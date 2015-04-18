<?php

require('modules/m_phpass/PasswordHash.php');
require('configs/include.php');


class c_iniciarsesion extends super_controller {

        protected $empleado;
        protected $temp;

        public function login(){
             $hasher = new PasswordHash(8, FALSE);   
            $cod['empleado']['cedula']= $this->post->cedula;
            $cod['empleado']['contraseña']= $this->post->contraseña;
            $options['empleado']['lvl2']= "login";
            
            
           
            
            
            $this->orm->connect();
            @$this->orm->read_data(array("empleado"), $options,$cod);
            $this->empleado = $this->orm->get_objects("empleado");
            $this->engine->assign('emp',$this->empleado[0]);
            $this->orm->close();
            
            if (empty($this->empleado[0])){
                // Esto no sirve para nada ¬¬
                @throw_exception($this->gvar['m_incorrect_login']);
            }else{
                $_SESSION['empleado']['cedula'] = $this->empleado[0]->get('cedula');
                $_SESSION['empleado']['tipo'] = $this->empleado[0]->get('tipo');
                $this->session = $_SESSION;
                
                if($this->empleado[0]->get('tipo')=='C') {
                    $this->temp='headerc.tpl';
                    //echo'Cliente';
                }
                else if ($this->empleado[0]->get('tipo')=='A'){
                    $this->temp='headera.tpl';
                    //echo'Admin';
                }
            }
        }

        public function display()
	{	
            
           
            if(is_object($this->empleado[0])){
                $this->engine->display($this->temp);
                $this->engine->display('footerd.tpl');
            }
            else {
                @$this->engine->assign('id', $this->post->cedula);
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


<?php

require('modules/m_phpass/PasswordHash.php');
require('configs/include.php');


class c_iniciarsesion extends super_controller {

    public function login(){
        
        if($this->post->cedula == "" || $this->post->contraseña ==""){
            $this->engine->assign("cargar","ms.incompletos()");
        }else{
        
            $hasher = new PasswordHash(8, FALSE);   
            
            $cod['empleado']['cedula']= $this->post->cedula;
            $cod['empleado']['contraseña']= $this->post->contraseña;
            $options['empleado']['lvl2']= "login";
                                  
            $this->orm->connect();
            $this->orm->read_data(array("empleado"), $options,$cod);
            $this->empleado = $this->orm->get_objects("empleado");
            
            $this->orm->close();
            
            if (! empty($this->empleado[0])){
                if($hasher->CheckPassword($this->post->contraseña, $this->empleado[0]->get('contraseña'))){
                
                $this->engine->assign('emp',$this->empleado[0]);
                
                $_SESSION['empleado']['cedula'] = $this->empleado[0]->get('cedula');
                $_SESSION['empleado']['tipo'] = $this->empleado[0]->get('tipo');
                
                if($this->empleado[0]->get('tipo')=='C') {
                    $_SESSION['empleado']['header']='header_funcionC.tpl';
                    $_SESSION['empleado']['funcion']='funcionC.tpl';
                    //echo'Cliente';
                }
                else if ($this->empleado[0]->get('tipo')=='A'){
                     $_SESSION['empleado']['header']='header_funcionA.tpl';
                     $_SESSION['empleado']['funcion']='funcionA.tpl';
                    //echo'Admin';
                }
                    
                 $this->session = $_SESSION;
                } 
                else{
                     $this->engine->assign("cargar","ms.incorrectos()");    
                     unset($hasher);
                }           
            }else{
                
                $this->engine->assign("cargar","ms.incorrectos()");         
                }
        }
    }
        
        public function logout(){            
            session_destroy();
            header('Location: iniciarsesion.php');
        }

        public function display()
	{	
            $hasher = new PasswordHash(8, FALSE);  
            
            if($_SESSION){
                $this->engine->display($_SESSION['empleado']['header']);
                $this->engine->display($_SESSION['empleado']['funcion']);
            }
            else {
                @$this->engine->assign('id', $this->post->cedula);                
                $this->engine->display('iniciarsesion.tpl');
                 
            }
            unset($hasher);
	}
	
	public function run()
	{
             if(isset($this->get->option)){
                    $this->{$this->get->option}();
             }
            if($_SESSION){
                $this->display();	
            }else{
                try{
                if(isset($this->post->option)){
                    $this->{$this->post->option}();
                }
                
               
                
                
            }
            catch (Exception $e){
                $this->error=1; $this->msg_warning=$e->getMessage(); $this->temp_aux = 'message.tpl';
                $this->engine->assign('type_warning',$this->type_warning); $this->engine->assign('msg_warning',$this->msg_warning);}
                $this->display();
            }
	}
}

$call = new c_iniciarsesion();
$call->run();


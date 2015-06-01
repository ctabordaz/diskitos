<?php

require('modules/m_phpass/PasswordHash.php');
require('configs/include.php');


class c_registrarencargo extends super_controller {

    public function registrar(){
        
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

        public function display()
	{
            $options['cliente']['lvl2'] = "all";
            
            $this->orm->connect();
            $this->orm->read_data(array("cliente"), $options);
            $this->clientes = $this->orm->get_objects("cliente");
            $this->orm->close();
            
            $this->engine->assign('clientes', $this->clientes);            
            
            if(@$this->post->funcion_error != ""){
                // Se lanzó un error: no debería recargarse la página
            }

            $this->engine->assign('title',"Registrar Encargo");
            $this->engine->display('registrarencargo.tpl');
            $this->engine->display('footerd.tpl');
	}
	
	public function run()
	{
            //if($_SESSION['empleado']['tipo'] != 'C'){
            //    header('Location: iniciarsesion.php');
            //}else{
               try{
                    if (isset($this->get->option)){
                        $this->{$this->get->option}();
                    }
               }
               catch (Exception $e){
                   $this->error=1; $this->msg_warning=$e->getMessage(); $this->temp_aux = 'message.tpl';
                   $this->engine->assign('type_warning',$this->type_warning); $this->engine->assign('msg_warning',$this->msg_warning);
               }

               $this->display();
            //}
	}
}

$call = new c_registrarencargo();
$call->run();


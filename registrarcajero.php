<?php

require('configs/include.php');

class c_registrarcajero extends super_controller {
    
    // Contraseñas sin encriptar
    // Faltan comprobaciones del Lado del Servidor
    var $cedula;
    
    public function consultar(){
        
        if(is_numeric($this->post->cedula)){
            $this->cedula = $this->post->cedula; 
        }else{
            throw_exception("Debe Ingresar una cedula");
        }
    }
    
    public function registrar(){
        $this->post->tipo = "C";
        $this->post->cedula = $cedula; 
        $emp = new empleado($this->post);
        
        $this->orm->connect();
        $this->orm->insert_data("empleado",$emp);
        $this->orm->close();
    }

    public function display()
    {		
       
        if(!is_empty($this->session)){
            
            $this->engine->assign('title',"Registrar Cajero");
            $this->engine->display('header_regcaj.tpl');
            
            if(!is_numeric($this->cedula)){
                $this->engine->display('registrarcajero.tpl');            
            }
            else{                
                $this->engine->display('registrarcajero2.tpl');
            }
            $this->engine->display('footer_regcaj.tpl');
        }
        else{
            $this->engine->display('noautorizado.tpl');
        }
        
    }
	
    public function run()
    {
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
    }
}

$call = new c_registrarcajero();
$call->run();


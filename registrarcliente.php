<?php

require('configs/include.php');

class c_registrarcajero extends super_controller {
    
    var $cedula;
    
    public function registrar(){
        $this->post->tipo = "C";
        $emp = new empleado($this->post);
        
        $this->orm->connect();
        $this->orm->insert_data("empleado",$emp);
        $this->orm->close();
    }
    
    public function consultar(){
        
        if(is_numeric($this->post->cedula)){
            $this->cedula = $this->post->cedula;           
            
            
        }else{
            throw_exception("Debe Ingresar una cedula");
        }
    }

    public function display()
    {		
       // if(!is_empty($this->session) && $this->session->empleado->tipo=='C'){
            if(!is_numeric($this->cedula)){
                $this->engine->assign('title',"Registrar Cliente");
                $this->engine->display('header_regcliente.tpl');
                $this->engine->display('registrarcliente.tpl');
                $this->engine->display('footer_regcliente.tpl');
            }
            else{
                $this->engine->assign('title',"Registrar Cliente");
                $this->engine->display('header_regcliente.tpl');
                $this->engine->display('registrarcliente2.tpl');
                $this->engine->display('footer_regcliente.tpl');
            }
            
       // }
        //else{
          //  $this->engine->display('noautorizado.tpl');
        //}
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


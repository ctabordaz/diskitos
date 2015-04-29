<?php

require('configs/include.php');

class c_realizarpedido extends super_controller {
    
    public function realizar(){
        
        
    }

    public function display()
    {		       
        if(!is_empty($this->session)){
            
            $this->engine->assign('title',"Realizar Pedido");
            $this->engine->display('header_rp.tpl');
            $this->engine->display('realizarpedido.tpl');
            $this->engine->display('footer_rp.tpl');
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

$call = new c_realizarpedido();
$call->run();


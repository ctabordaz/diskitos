
﻿<?php

require('configs/include.php');

class c_actualizarcantidad extends super_controller {
    
    protected $edicion;
    
    public function actualizar(){
        $this->edicion = new edicion($this->post);
        if(is_empty($this->edicion->get('codigo_de_barras')) && is_empty($this->edicion->get('album'))) {
            throw_exception("");
        }
        if($this->edicion->get('cantidad')<0){
            throw_exception("");
        }
        $this->orm->connect();
        $this->orm->update_data("one",$this->edicion);
        $this->orm->close();
        
        /*
        $this->type_warning = "success";
        $this->msg_warning = "Edicion actualizada correctamente";

        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);*/
        
    }

    public function display()
	{                
		$this->engine->assign('title',"Actualizar Cantidad");
		$this->engine->display('headera.tpl');
		$this->engine->display('actualizarcantidad.tpl');
		$this->engine->display('footer_ActualizarCant.tpl');
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

$call = new c_actualizarcantidad();
$call->run();


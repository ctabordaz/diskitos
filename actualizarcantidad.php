﻿<?php

require('configs/include.php');

class c_actualizarcantidad extends super_controller {

    public function actualizar(){
        
        
        
        
    }


    public function display()
	{		
		$options['edicion']['lvl2']= "all";
                $auxiliars['edicion']=array("titulo","interprete","genero","ano_publicacion","caratula");  
		$this->orm->connect();
		$this->orm->read_data(array("edicion"), $options);
		$this->edicion = $this->orm->get_objects("edicion",null,$auxiliars);
		$this->orm->close();
		
		$this->engine->assign('edicion',  $this->edicion);
               
                
		$this->engine->assign('title',"Actualizar Ediciones");
		$this->engine->display('headera.tpl');
		$this->engine->display('actualizarcantidad.tpl');
		$this->engine->display('footerd.tpl');
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


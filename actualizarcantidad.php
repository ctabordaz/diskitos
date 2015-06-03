
﻿<?php

require('configs/include.php');

class c_actualizarcantidad extends super_controller {
    
    protected $edicion;
    
    public function actualizar(){
        
        $this->edicion = new edicion($this->post);
        
        if(is_empty($this->edicion->get('codigo_de_barras')) || is_empty($this->edicion->get('cantidad'))) {
            $this->engine->assign("cargar","camposVacios()");
        } elseif($this->edicion->get('cantidad')<0){
            $this->engine->assign("cargar","cantidadNegativa()");
        } else{
            $this->engine->assign("cargar","exitoso()");
            $this->orm->connect();
            $this->orm->update_data("one",$this->edicion);
            $this->orm->close();
        }
        
    }

    public function display()
	{       
                $options['edicion']['lvl2']= "all";
                $auxiliars['edicion']=array("nro_catalogo","titulo","interprete","genero","ano_publicacion","caratula");  
                $this->orm->connect();
                $this->orm->read_data(array("edicion"), $options);
                $this->edicion = $this->orm->get_objects("edicion",null,$auxiliars);
                $this->orm->close();

                $this->engine->assign('edicion', $this->edicion);
        
		$this->engine->assign('title',"Actualizar Cantidad");
		$this->engine->display('headera.tpl');
		$this->engine->display('actualizarcantidad.tpl');
		$this->engine->display('footer_ActualizarCant.tpl');
	}
	
	public function run()
	{
            if($_SESSION['empleado']['tipo'] != 'A'){
                header('Location: iniciarsesion.php');
            }else{
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
}

$call = new c_actualizarcantidad();
$call->run();


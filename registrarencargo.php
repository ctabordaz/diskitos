<?php

require('configs/include.php');


class c_registrarencargo extends super_controller {
    
        public function registrar(){
            
            $encargo = new encargo($this->post);
            
            if(is_empty($encargo->get('titulo_enc')) || is_empty($encargo->get('interprete_enc'))
                    || is_empty($encargo->get('cliente'))) {
                $this->engine->assign("cargar","camposVacios()");
            } else{
                $this->engine->assign("cargar","exitoso()");
                $this->orm->connect();
                $this->orm->insert_data("encargo",$encargo);
                $this->orm->close();
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
            $this->engine->display('footer_RegistrarEncargo.tpl');
	}
	
	public function run()
	{
            if($_SESSION['empleado']['tipo'] != 'C'){
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

$call = new c_registrarencargo();
$call->run();


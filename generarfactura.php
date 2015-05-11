<?php

require('configs/include.php');

class c_generarfactura extends super_controller {
    
        public function generar() {
            
            
            
            settype($data, 'object');
            $data->codigo = 1;
            $data->cajero = $_SESSION['empleado']['cedula'];

            $factura = new factura($data);
           
            //inserta la factura
                $this->orm->connect();
                $this->orm->insert_data("normal", $factura);
                $this->orm->close();

        //busca la facura insertada
                $options['factura']['lvl2'] = "max";
                $this->orm->connect();
                $this->orm->read_data(array("factura"), $options);
                $maxf = $this->orm->get_objects("factura");
                $this->orm->close();

                //insertar encabezado
             settype($data, 'object');
             
             $data->factura = $maxf[0]->get('codigo');
             
             $data->cliente = $this->post->cliente;
            
             $encabezado = new encabezado($data);
             $this->orm->connect();
             
             $this->orm->insert_data("normal", $encabezado);
             
             $this->orm->close();
             //insertar detaller
                     
             
             foreach ($this->post as $clave => $valor){
               
                 if($clave !== 'cliente'){
                     print_r2($clave." ".$valor);
                    
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
            
            $options['edicion']['lvl2']= "all";
            $auxiliars['edicion']=array("titulo","interprete","genero","ano_publicacion","caratula");  
            $this->orm->connect();
            $this->orm->read_data(array("edicion"), $options);
            $this->edicion = $this->orm->get_objects("edicion",null,$auxiliars);
            $this->orm->close();

            $this->engine->assign('edicion',  $this->edicion);
            //print_r2($this->edicion);
            $this->engine->assign('title',"Generar Factura");
            $this->engine->display('headerc.tpl');
            $this->engine->display('generarfactura.tpl');
            $this->engine->display('footerd.tpl');
	}
	
	public function run()
	{
            try{
                if(isset($this->get->option)){
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

$call = new c_generarfactura();
$call->run();

?>
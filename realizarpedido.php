<?php

require('configs/include.php');

class c_realizarpedido extends super_controller {
    
    public function pedir()
    {
        $pedidos = (array) $this->post;
        $aux = array();
        //echo '<br /><br /><br /><br />';
        
        foreach($pedidos as $key => $value)
        {
            $edi = substr($key, 9-strlen($key));
                
            if(! is_empty($value) ){
                array_push($aux, $edi);
            }
        }
        
        // aux tiene los codigos de barras de las ediciones que se eligieron
        
        $cont = 1;
        
        foreach($aux as $key => $value)
        {
            foreach($pedidos as $key2 => $value2)
            {
                if($key2 == "cantidad-".$value){
                    // value = codigo_de_barras
                    // value2 = cantidad a pedir
                    
                    $options['edicion']['lvl2']="all_ea";
                    $cod['edicion']['codigo_de_barras'] = $value;
                
                    $auxiliars['edicion']=array("nro_catalogo","titulo","interprete","genero","ano_publicacion","caratula");  
                    $this->orm->connect();
                    $this->orm->read_data(array("edicion"), $options, $cod);
                    $ediciones2 = $this->orm->get_objects("edicion",null,$auxiliars);
                    //print_r2($ediciones2);
                    $this->orm->close();

                    $this->engine->assign('ediciones-'.$cont,$ediciones2);
                    $this->engine->assign('cantidad-'.$cont,$value2);
                    $cont = $cont + 1;
                }
            }
        }
    }
    
    public function display()
    {	
        if(sizeof((array) $this->post) != 0){
            
            $this->engine->display('header_rp.tpl');
            $this->engine->display('realizarpedido2.tpl');
            $this->engine->display('footer_rp.tpl');
        }
        else{            
            $options['edicion']['lvl2']="all";
            $auxiliars['edicion']=array("nro_catalogo","titulo","interprete","genero","ano_publicacion","caratula");  
            $this->orm->connect();
            $this->orm->read_data(array("edicion"), $options);
            $ediciones = $this->orm->get_objects("edicion",null,$auxiliars);
            $this->orm->close();
            
            $this->engine->assign('ediciones',$ediciones);
            $this->engine->display('header_rp.tpl');
            $this->engine->display('realizarpedido.tpl');
            $this->engine->display('footer_rp.tpl');
        }
        
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

$call = new c_realizarpedido();
$call->run();


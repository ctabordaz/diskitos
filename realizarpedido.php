<?php

require('configs/include.php');

class c_realizarpedido extends super_controller {
    
    public function enviar()
    {
        $this->post->fecha = date('Y-m-d');
        $this->post->empleado = $_SESSION['empleado']['cedula'];
        
        $pedid = new pedido($this->post);
        $this->orm->connect();
        $this->orm->insert_data("pedido",$pedid);
        $this->orm->close();
        
        header('Location: realizarpedido.php');
    }
    
    public function pedir()
    {
        $pedidos = (array) $this->post;
        $aux = array();
        
        foreach($pedidos as $key => $value)
        {
            $edi = substr($key, 9-strlen($key));
                
            if(! is_empty($value) ){
                array_push($aux, $edi);
            }
        }
        
        // aux tiene los codigos de barras de las ediciones que se eligieron
        
        $edics = array();
        $provs = array();
        $cants = array();
        
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
                    $this->orm->close();

                    array_push($edics, $ediciones2[0]);
                    array_push($cants, $value2);     
                    
                } else if($key2 == "proveedor-".$value){
                    // value2 = nombre del proveedor
                    
                    array_push($provs, $value2);    
                }
            }
        }
        $this->engine->assign('ediciones', $edics);
        $this->engine->assign('cantidades', $cants);
        $this->engine->assign('proveedores', $provs);
    }
    
    public function display()
    {	
        if(sizeof((array) $this->post) != 0){
            
            $this->engine->display('header_rp.tpl');
            $this->engine->display('realizarpedido2.tpl');
            $this->engine->display('footer_rp2.tpl');
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
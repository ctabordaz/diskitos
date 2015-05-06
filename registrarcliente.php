<?php

require('configs/include.php');

class c_registrarcliente extends super_controller {
    
    // Contraseñas sin encriptar
    var $cedula;
    var $flag;
    
    public function consultar(){
        
        function verificarClaves($objeto, $ced)
        {
            $objeto->orm->connect();

            $cod['cliente']['cedula'] = $ced;
            $options['cliente']['lvl2']="count_by_ced";
            $objeto->orm->read_data(array("cliente"),$options,$cod);

            $datos = $objeto->orm->data;
            $resultado = $datos['cliente'][0];
            $contador = $resultado->contador;

            $objeto->orm->close();

            if($contador ==  1)
            {
                return 1; // Existe la persona
            } else {
                return 0; // No existe
            }
        }
        
        function CampoVacio($cedula)
        {
            if( $cedula == "" ){                
                return 1;                
            } else{
                return 0;
            }
        }
        
        function ValorNumerico($cedula)
        {
            if( is_numeric($cedula) ){            
                return 0;                
            } else{
                return 1;
            }
        }
        
        if(verificarClaves($this, $this->post->cedula) == 1){
            $ide = $this->post->cedula; 
            $this->engine->assign("cargar","yaExiste($ide)");
            $this->flag = -1;
        } else{        
            if(CampoVacio($this->post->cedula) == 1){
                $this->engine->assign("cargar","faltante()");
                $this->flag = -1;
            } elseif(ValorNumerico($this->post->cedula) == 1){
                $this->engine->assign("cargar","noNumerico()");
                $this->flag = -1;
            } else{
                $this->cedula = $this->post->cedula; 
                $this->flag = 1;
            }
        }
    }
    
    public function registrar(){
        
        function CamposVacios($cliente)
        {
            if( $cliente->get("nombre") == "" || $cliente->get("telefono") == "" || 
                $cliente->get("direccion") == "" || $cliente->get("correo") == ""){                
                return 1;                
            } else{
                return 0;
            }
        }
        
        function ValoresNumericos($cliente)
        {
            if( is_numeric($cliente->get("telefono")) ){            
                return 0;                
            } else{
                return 1;
            }
        }
        
        function ValidarCorreo($cliente)
        {
            if(strpos($cliente->get("correo"), '@') !== false &&
               strpos($cliente->get("correo"), '.') !== false &&
               stripos($cliente->get("correo"), '@') < stripos($cliente->get("correo"), '.')){            
                return 0;                
            } else{
                return 1;
            }
        }
        
        $cl = new cliente($this->post);
        
        if(CamposVacios($cl) == 1){
            $this->engine->assign("cargar2","faltantes_C()");
        } elseif(ValoresNumericos($cl) == 1){
            $this->engine->assign("cargar2","noNumerico_C()");
        } elseif(ValidarCorreo($cl) == 1){
            $this->engine->assign("cargar2","formatoInvalido()");
        } else{
            $this->orm->connect();
            $this->orm->insert_data("cliente",$cl);
            $this->orm->close();
        }
    }

    public function display()
    {		
        if($_SESSION['empleado']['tipo'] == 'C'){
            
            $this->engine->assign('title',"Registrar Cliente");
            $this->engine->display('header_regcliente.tpl');
            
            if($this->flag != 1){
                $this->engine->display('registrarcliente.tpl');            
            }
            else{                
                $this->engine->assign("ide", $this->cedula);
                $this->engine->display('registrarcliente2.tpl');
            }
            $this->engine->display('footer_regcliente.tpl');
        }
        else{
            header('Location: iniciarsesion.php');
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

$call = new c_registrarcliente();
$call->run();


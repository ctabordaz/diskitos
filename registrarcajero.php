<?php

require('configs/include.php');

class c_registrarcajero extends super_controller {
    
    // Contraseñas sin encriptar
    var $cedula;
    var $flag;
    
    public function consultar(){
        
        function verificarClaves($objeto, $ced)
        {
            $objeto->orm->connect();

            $cod['empleado']['cedula'] = $ced;
            $options['empleado']['lvl2']="count_by_ced";
            $objeto->orm->read_data(array("empleado"),$options,$cod);

            $datos = $objeto->orm->data;
            $resultado = $datos['empleado'][0];
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
        
        function CamposVacios($empleado)
        {
            if( $empleado->get("nombre") == "" || $empleado->get("telefono") == "" || 
                $empleado->get("correo") == "" || $empleado->get("contraseña") == "" || 
                $empleado->get("salario") == ""){                
                return 1;                
            } else{
                return 0;
            }
        }
        
        function ValoresNumericos($empleado)
        {
            if( is_numeric($empleado->get("telefono")) && 
                is_numeric($empleado->get("salario")) ){            
                return 0;                
            } else{
                return 1;
            }
        }
        
        function ValidarCorreo($empleado)
        {
            if(strpos($empleado->get("correo"), '@') !== false &&
               strpos($empleado->get("correo"), '.') !== false &&
               stripos($empleado->get("correo"), '@') < stripos($empleado->get("correo"), '.')){            
                return 0;                
            } else{
                return 1;
            }
        }
        
        $this->post->tipo = "C";
        $this->post->cedula = $this->cedula; 
        $emp = new empleado($this->post);
        
        if(CamposVacios($emp) == 1){
            $this->engine->assign("cargar2","faltantes_E()");
        } elseif(ValoresNumericos($emp) == 1){
            $this->engine->assign("cargar2","noNumericos_E()");
        } elseif(ValidarCorreo($emp) == 1){
            $this->engine->assign("cargar2","formatoInvalido()");
        } else{
            $this->orm->connect();
            $this->orm->insert_data("empleado",$emp);
            $this->orm->close();
        }
    }

    public function display()
    {		
        if($_SESSION['empleado']['tipo'] == 'A'){
            
            $this->engine->assign('title',"Registrar Cajero");
            $this->engine->display('header_regcaj.tpl');
            
            if($this->flag != 1){
                $this->engine->display('registrarcajero.tpl');            
            }
            else{                
                $this->engine->display('registrarcajero2.tpl');
            }
            $this->engine->display('footer_regcaj.tpl');
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

$call = new c_registrarcajero();
$call->run();


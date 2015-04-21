<?php /* Smarty version Smarty-3.0.9, created on 2015-04-21 05:36:06
         compiled from "iniciarsesion.php" */ ?>
<?php /*%%SmartyHeaderCode:183975535c5a67d6576-36079505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd42e5f836e4ba469643dc7c6f37c154acc0eed' => 
    array (
      0 => 'iniciarsesion.php',
      1 => 1429587113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183975535c5a67d6576-36079505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php

require('modules/m_phpass/PasswordHash.php');
require('configs/include.php');


class c_iniciarsesion extends super_controller {

        protected $empleado;
        protected $temp;
        protected $menu;
        
        public function login(){
            $hasher = new PasswordHash(8, FALSE);   
            
            $cod['empleado']['cedula']= $this->post->cedula;
            $cod['empleado']['contraseña']= $this->post->contraseña;
            $options['empleado']['lvl2']= "login";
                                  
            $this->orm->connect();
            @$this->orm->read_data(array("empleado"), $options,$cod);
            $this->empleado = $this->orm->get_objects("empleado");
            
            $this->orm->close();
            
            if (! empty($this->empleado[0])){
                if($hasher->CheckPassword($this->post->contraseña, $this->empleado[0]->get('contraseña'))){
                
                $this->engine->assign('emp',$this->empleado[0]);
                
                $_SESSION['empleado']['cedula'] = $this->empleado[0]->get('cedula');
                $_SESSION['empleado']['tipo'] = $this->empleado[0]->get('tipo');
                
                // La barra debe ocntener un Volver y un Cerrar Cesión
                $this->session = $_SESSION;
                
                    if($this->empleado[0]->get('tipo')=='C') {
                        $this->temp='header_funcionC.tpl';
                        $this->menu='funcionC.tpl';
                        //echo'Cliente';
                    }
                    else if ($this->empleado[0]->get('tipo')=='A'){
                        $this->temp='header_funcionA.tpl';
                        $this->menu='funcionA.tpl';
                        //echo'Admin';
                    } 
                } 
                else{
                     @throw_exception($this->gvar['m_incorrect_login']);
                     unset($hasher);
                }           
            }
        }

        public function display()
	{	
            if(is_empty(@$this->sesion) == 1){
                
                if(@$this->sesion['empleado']['tipo']=='C'){
                    $this->temp='header_funcionC.tpl';
                    $this->menu='funcionC.tpl';
                }
                else{
                    $this->temp='header_funcionA.tpl';
                    $this->menu='funcionA.tpl';
                }
                $this->engine->display($this->temp);
                $this->engine->display($this->menu);
            }
            else{
                $hasher = new PasswordHash(8, FALSE);  

                if(is_object($this->empleado[0]) && $hasher->CheckPassword($this->post->contraseña, $this->empleado[0]->get('contraseña'))){
                    $this->engine->display($this->temp);
                    $this->engine->display($this->menu);
                }
                else {
                    @$this->engine->assign('id', $this->post->cedula);
                    $this->engine->display('iniciarsesion.tpl');
                }
                unset($hasher);
            }
	}
	
	public function run()
	{
            try{
                if (isset($this->post->option)){
                    $this-><?php echo $_smarty_tpl->getVariable('this')->value->post->option;?>
();
                }
            }
            catch (Exception $e){
                $this->error=1; $this->msg_warning=$e->getMessage(); $this->temp_aux = 'message.tpl';
                $this->engine->assign('type_warning',$this->type_warning); $this->engine->assign('msg_warning',$this->msg_warning);}
                $this->display();		
	}
}

$call = new c_iniciarsesion();
$call->run();


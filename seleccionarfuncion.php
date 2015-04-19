<?php

require('configs/include.php');

class c_seleccionarfuncion extends super_controller {
	
        protected $temp;
        protected $menu;
        
        public function admin()
        {
            $this->temp='header_funcionA.tpl';
            $this->menu='funcionA.tpl';
        }
        
        public function cajero()
        {
            $this->temp='header_funcionC.tpl';
            $this->menu='funcionC.tpl';
        }
        
	public function display()
	{
		$this->engine->assign('title',$this->gvar['n_index']);
		$this->engine->display('header_funcionA.tpl');
		$this->engine->display('funcionA.tpl');
	}
	
	public function run()
        {
            try {
                if (isset($this->get->option))
                {
                    $this->{$this->get->option}();
                }
            }
            catch (Exception $e) 
            {
                $this->error=1; $this->msg_warning=$e->getMessage();
                $this->engine->assign('type_warning',$this->type_warning);
                $this->engine->assign('msg_warning',$this->msg_warning);
                $this->temp_aux = 'message.tpl';
            }    
            $this->engine->display($this->temp);
            $this->engine->display($this->menu);
        }
}

$call = new c_seleccionarfuncion();
$call->run();

?>
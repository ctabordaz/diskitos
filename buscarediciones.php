<?php

require('configs/include.php');

class c_buscarediciones extends super_controller {

    public function consultar(){
        
        $aconsultar['cancion']['nombre'] = $this->post->palabra;
        $options['cancion']['lvl2']= "buscar_ediciones";
        $this->orm->connect();
        $this->orm->read_data(array("cancion"), $options,$aconsultar);
        $bxcancion = $this->orm->data['cancion'];
        //print_r2($bxcancion);
        $aconsultar['album']['titulo'] = $this->post->palabra;
        $options['album']['lvl2']= "buscar_ediciones_titulo";
        $this->orm->read_data(array("album"), $options,$aconsultar);
        $bxtitulo = $this->orm->data['album'];
        //print_r2($bxtitulo);
        $aconsultar['album']['interprete'] = $this->post->palabra;
        $options['album']['lvl2']= "buscar_ediciones_interprete";
        $this->orm->read_data(array("album"), $options,$aconsultar);
        print_r2($this->orm->data);
        $bxinterprete = $this->orm->data['album'];
        print_r2($bxinterprete);
        //  $this->orm->close();
        //
        //  $this->engine->assign('edicion',  $this->edicion);
        
    }      

    public function display()
	{		                
            $this->engine->assign('title',"Buscar Ediciones");
            $this->engine->display('header_BuscarEdiciones.tpl');
            $this->engine->display('buscarediciones.tpl');
            $this->engine->display('footer_BuscarEdiciones.tpl');

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

$call = new c_buscarediciones();
$call->run();


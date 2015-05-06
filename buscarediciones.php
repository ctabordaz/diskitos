<?php

require('configs/include.php');

class c_buscarediciones extends super_controller {

    var $resulconsul;
    public function consultar(){
        //Generación de la consulta por nombre de la canción
        $loqueconsulto = $this->post->palabra;
        
        if($loqueconsulto=="" || $loqueconsulto == " "){
            $this->engine->assign("cargar","incompletos()");
        
        }else{
           
            $aconsultar['cancion']['nombre'] = $this->post->palabra;
            $options['cancion']['lvl2']= "buscar_ediciones";
            $this->orm->connect();
            $this->orm->read_data(array("cancion"), $options,$aconsultar);
            $bxcancion = $this->orm->data['cancion'];
            //print_r2($bxcancion);
            //Generación de la consulta por titulo del album
            $aconsultar['album']['titulo'] = $this->post->palabra;
            $options['album']['lvl2']= "buscar_ediciones_titulo";
            $this->orm->read_data(array("album"), $options,$aconsultar);
            $bxtitulo = $this->orm->data['album'];
            //print_r2($bxtitulo);
            //Generación de la consulta por nombre del interprete
            $aconsultar['album']['interprete'] = $this->post->palabra;
            $options['album']['lvl2']= "buscar_ediciones_interprete";
            $this->orm->read_data(array("album"), $options,$aconsultar);
           // print_r2($this->orm->data);
            $bxinterprete = $this->orm->data['album'];
            //print_r2($bxinterprete);
            $this->orm->close();
            //
            //  $this->engine->assign('edicion',  $this->edicion);
            //Une los arrays obtenidos de cada consulta
            $todojunto = array_merge($bxcancion, $bxtitulo, $bxinterprete);
            //print_r2($todojunto);
            //elimina resultados duplicados en las consultas y lo deja en un solo array
            $resultado = array_unique($todojunto,SORT_REGULAR);
           // print_r2($resultado);
            $this->engine->assign('resulconsul',$resultado);
            $this->resulconsul = $resultado;
          //  print_r2($this->session);
            
            if(is_empty($this->resulconsul)){
                $this->engine->assign("cargar","nodatos()");
            }
        }
        
        
        }      

    public function display()
	{	
            if(!is_empty($this->session)){
                if(is_empty($this->resulconsul)){
                    $this->engine->assign('title',"Buscar Ediciones");
                    $this->engine->display('header_BuscarEdiciones.tpl');
                    $this->engine->display('buscarediciones.tpl');
                    $this->engine->display('footer_BuscarEdiciones.tpl');
                }else{
                    $this->engine->assign('title',"Buscar Ediciones");
                    $this->engine->display('header_BuscarEdiciones.tpl');
                    $this->engine->display('buscarediciones2.tpl');
                    $this->engine->display('footer_BuscarEdiciones.tpl');
                }
            }else{
                $this->engine->display('noautorizado.tpl');
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

$call = new c_buscarediciones();
$call->run();


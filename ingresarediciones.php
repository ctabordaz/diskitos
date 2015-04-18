<?php

require('configs/include.php');

class c_ingresarediciones extends super_controller {

        public function ingresar(){
            
            function verificarClaves($objeto, $nc)
            {
                $objeto->orm->connect();

                $cod['album']['nro_catalogo'] = $nc;
                $options['album']['lvl2']="count_by_ncatalogo";
                $objeto->orm->read_data(array("album"),$options,$cod);

                $datos = $objeto->orm->data;
                $resultado = $datos['album'][0];
                $contador = $resultado->contador;
                
                $objeto->orm->close();

                if($contador ==  1)
                {
                    return 1;
                } else {
                    return 0;
                }
            }
            
            // ---------------------------------------------------------------------------------------
                        
            // $nueva_dir = C_FULL_PATH . "images/caratulas/";
            $nueva_dir = "./images/caratulas/";
            $nueva_ruta = $nueva_dir . basename($_FILES["caratula"]["name"]);
            $imageFileType = pathinfo($nueva_ruta,PATHINFO_EXTENSION);

            if(! ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
            || $imageFileType == "gif" )) {
                $nueva_ruta = $nueva_dir . "sin_caratula.gif";
                $imageFileType = "gif";
            } else {
                $ruta_temporal = $_FILES['caratula']['tmp_name'];                
                move_uploaded_file($ruta_temporal,  $nueva_ruta);
            }

            // ---------------------------------------------------------------------------------------
            
            if(verificarClaves($this, $this->post->nro_catalogo) == 1){
                $nc = $this->post->nro_catalogo; 
                echo "<script languaje='javascript'>alert('Ya existe un album con número de catalogo = ' + $nc)</script>";
                // no ejecutar el resto y recargar la pagina con todos los valores
            }
            
            $this->post->caratula = $nueva_ruta;
            $this->post->album = $this->post->nro_catalogo;
            
            $album = new album($this->post);         
            $edicion = new edicion($this->post);
            
            $this->orm->connect();
            $this->orm->insert_data("album",$album);
            $this->orm->insert_data("edicion",$edicion);
            
            for($n=1;$n<=$this->post->nca;$n++){
                  
                settype($data,'object');
                             
                $data->consecutivo= $n;
                $nombre = "ncancion".$n;
                $data->nombre= $this->post->$nombre;
                $compositor = "ccancion".$n;
                $data->compositor= $this->post->$compositor;
                $da = "duraciona".$n;
                $db = "duracionb".$n;
                $d = $this->post->$da.":".$this->post->$db;
                $data->duracion = $d;
                $data->album= $this->post->nro_catalogo;
                $cancion = new cancion($data);
                
                $this->orm->insert_data("cancion",$cancion);
            }   
            $this->orm->close();
        }
    
	public function display()                
	{		
            $this->engine->assign('title',"Ingresar Ediciones");
            $this->engine->display('headera.tpl');
            $this->engine->display('ingresarediciones.tpl');
            $this->engine->display('footerd.tpl');
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

$call = new c_ingresarediciones();
$call->run();

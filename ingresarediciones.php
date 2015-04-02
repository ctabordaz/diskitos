<?php

require('configs/include.php');

class c_ingresarediciones extends super_controller {

        public function ingresar(){
            
            $nueva_dir = C_FULL_PATH . "images/caratulas/";
            $nueva_ruta = $nueva_dir . basename($_FILES["caratula"]["name"]);
            $imageFileType = pathinfo($nueva_ruta,PATHINFO_EXTENSION);

            if(! ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
            || $imageFileType == "gif" )) {
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $nueva_ruta = $nueva_dir . "sin_caratula.gif";
                $imageFileType = "gif";
            } else {
                $ruta_temporal = $_FILES['caratula']['tmp_name'];                
                move_uploaded_file($ruta_temporal,  $nueva_ruta);
            }

            // ---------------------------------------------------------------------------------------
            
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

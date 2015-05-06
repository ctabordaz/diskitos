<?php

require('configs/include.php');

class c_ingresarediciones extends super_controller {
        
    public function ingresar(){
        
        // verificar que no se inserte un album ya registrado
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

        function extensionFile($objeto)
        {
            $tmp_name = $objeto->files->caratula['tmp_name'];
            
            if($tmp_name==""){
                $imageFileType = "";
            } else{
                $imageFileType = exif_imagetype($tmp_name);
            }
            
            return $imageFileType;
        }

        function aprobarCaratula($ext, $nameFile)
        {
            $nueva_dir = "./images/caratulas/";
            
            if (($ext == IMAGETYPE_JPEG) || ($ext == IMAGETYPE_PNG) || ($ext == IMAGETYPE_GIF)
             || ($ext == IMAGETYPE_BMP)) {
             
                $nueva_ruta = $nueva_dir . basename($nameFile);
                $ruta_temporal = $_FILES['caratula']['tmp_name'];                
                move_uploaded_file($ruta_temporal,  $nueva_ruta);
                
            }else {
                $nueva_ruta = $nueva_dir . "sin_caratula.gif";
            }
            
            return $nueva_ruta;
        }
        
        function CamposVacios_EA($album, $edicion)
        {
            if( $album->get("titulo")       == "" || $album->get("interprete")      == "" || 
                $album->get("nro_catalogo") == "" || $album->get("pais_origen")     == "" || 
                $album->get("disquera")     == "" || $album->get("ano_publicacion") == "" || 
                $album->get("genero")       == "" || $album->get("caratula")        == "" ){                
                return 1;                
            } elseif( $edicion->get("codigo_de_barras") == "" || $edicion->get("formato") == "" || 
                      $edicion->get("cantidad")         == "" || $edicion->get("precio")  == "" ){
                return 1;                
            } else{
                return 0;
            }
        }

        function CamposVacios_C($cancion)
        {
            if( $cancion->get("nombre") == "" || $cancion->get("compositor") == "" || 
                $cancion->get("duracion") == ":" ){                
                return 1;                
            } else{
                return 0;
            }
        }
        
        function ValoresNumericos_EA($album, $edicion)
        {
            if( is_numeric($album->get("nro_catalogo")) && 
                is_numeric($album->get("ano_publicacion")) &&
                is_numeric($edicion->get("cantidad")) &&
                is_numeric($edicion->get("precio")) ){            
                return 0;                
            } else{
                return 1;
            }
        }
        
        function ValoresNumericos_C($minutes, $seconds)
        {
            if( is_numeric($minutes) && 
                is_numeric($seconds) ){               
                return 0;                
            } else{
                return 1;
            }
        }
        
        function VerificarRangoTemporal($minutes, $seconds)
        {
            if( $minutes>=0 && $minutes<=59 && $seconds>=0 && $seconds<=59 ){               
                return 0;                
            } else{
                return 1;
            }
        }
        
        $extension = extensionFile($this);
        
        if($extension==""){
            $nr = aprobarCaratula($extension, "");
        }else{
            $nr = aprobarCaratula($extension, $_FILES["caratula"]["name"]);
        }
        

        if(verificarClaves($this, $this->post->nro_catalogo) == 1){

            $nc = $this->post->nro_catalogo; 
            $this->engine->assign("cargar","AlbumDB($nc)");
        }

        $this->post->caratula = $nr;
        $this->post->album = $this->post->nro_catalogo;

        $album = new album($this->post);         
        $edicion = new edicion($this->post);

        if(CamposVacios_EA($album, $edicion) == 1){
            $this->engine->assign("cargar","faltanteEA()");
        } elseif(ValoresNumericos_EA($album, $edicion) == 1){
            $this->engine->assign("cargar","numericosEA()");
        } else{
        
            $this->orm->connect();            
            
            $flag = 1;
            $song = array(); 
            
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
                
                if($n == 1){
                    if(CamposVacios_C($cancion) == 1){
                        $this->engine->assign("cargar","faltantePC()");
                        $flag = -1;
                        break;
                    }
                } else{
                    if(CamposVacios_C($cancion) == 1){
                        $this->engine->assign("cargar","faltanteRC()");
                        $flag = -1;
                        break;
                    } 
                }
                
                if(ValoresNumericos_C($this->post->$da, $this->post->$db) == 1){
                    $this->engine->assign("cargar","numericosC()");
                    $flag = -1;
                    break;
                }
                
                array_push($song , $cancion); 
            }   
            
            if($flag == 1){
                $this->orm->insert_data("album",$album);
                $this->orm->insert_data("edicion",$edicion);
                
                for($n=0; $n<$this->post->nca; $n++){
                    $this->orm->insert_data("cancion",$song[$n]);
                }
                
                $this->engine->assign("cargar","exitoso()");
            }
            $this->orm->close();
        }
    }

    public function display()                
    {   
        if(@$this->post->funcion_error != ""){
            
            // Se lanzó un error: no debería recargarse la página
        }
        
        $this->engine->assign('title',"Ingresar Ediciones");
        $this->engine->display('ingresarediciones.tpl');
        $this->engine->display('footerd.tpl');
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

$call = new c_ingresarediciones();
$call->run();

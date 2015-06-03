<?php

require('configs/include.php');
require('modules/fpdf/fpdf.php');

class c_generarfactura extends super_controller {
    
        public function verificarC($id){
            $cod['cliente']['cedula'] = $id;
                $options['cliente']['lvl2'] = "factura";
                $this->orm->connect();
                $this->orm->read_data(array("cliente"), $options, $cod);
                $this->cliente = $this->orm->get_objects("cliente");
                if(is_empty($this->cliente)){
                     throw_exception("ms.cliente()");
                }else{
                    return $this->cliente;
                }
        }
        public function veriicarEdiciones($ediciones){
             foreach($ediciones as $key=>$val){
                if($key !== "cliente"){
                         $cod['edicion']['codigo_de_barras'] = $key;
                        $auxiliars['edicion']=array("titulo"); 
                        $options['edicion']['lvl2'] = "factura";
                        $this->orm->connect();
                        $this->orm->read_data(array("edicion"), $options, $cod);
                        $edicion = $this->orm->get_objects("edicion",NULL,$auxiliars);
                        if(is_empty($edicion)){
                            throw_exception("ms.edicionN($key)");
                        }else{
                            
                            if($edicion[0]->get('cantidad')< 1 || $edicion[0]->get('cantidad')< $val){
                                $cant = $edicion[0]->get('cantidad');
                                throw_exception("ms.edicionC($key,$cant)");
                            }
                        }
                }
             
             }
            
            
        }
    
        public function generar(){
            
            
            $cliente = $this->verificarC($this->post->cliente);
            $this->veriicarEdiciones($this->post);
            settype($data, 'object');
            $data->codigo = 1;
            $data->cajero = $_SESSION['empleado']['cedula'];

            $factura = new factura($data);
           
            //inserta la factura
                $this->orm->connect();
                $this->orm->insert_data("normal", $factura);
                $this->orm->close();

        //busca la facura insertada
                
                $options['factura']['lvl2'] = "max";
                $this->orm->connect();
                $this->orm->read_data(array("factura"), $options);
                $maxf = $this->orm->get_objects("factura");
                $this->orm->close();

                //insertar encabezado
             settype($data, 'object');
             
             $data->factura = $maxf[0]->get('codigo');
             
             $data->cliente = $this->post->cliente;
            
             $encabezado = new encabezado($data);
             $this->orm->connect();
             
             $this->orm->insert_data("normal", $encabezado);
             
             $this->orm->close();
             //insertar detalle
             
               $options['empresa']['lvl2'] = "datos";
                $this->orm->connect();
                $this->orm->read_data(array("empresa"), $options);
                $datos = $this->orm->get_objects("empresa");
                $this->orm->close();
                
                               
                

                $archivo="factura-".$maxf[0]->get('codigo').".pdf";
                $archivo_de_salida=$archivo;

            $pdf=new FPDF();  //crea el objeto
            $pdf->AddPage();
                               
                 // Encabezado de la factura
                $pdf->SetFont('Arial','B',14);
                $pdf->Cell(190, 10, "FACTURA", 0, 2, "C");
                $pdf->SetFont('Arial','B',10);
                $pdf->MultiCell(190,5, "Numero de factura: ".$maxf[0]->get('codigo')."\n"."Fecha: ", 0, "C", false);
                
                
                $pdf->Ln(2);
                
                
                $pdf->SetFont('Arial','B',12);
                $top_datos=45;
                $pdf->SetXY(40, $top_datos);
                $pdf->Cell(190, 10, "Datos de la tienda:", 0, 2, "J");
                $pdf->SetFont('Arial','',9);
                $pdf->MultiCell(190, //posición X
                5, //posición Y
                $datos[0]->get('nombre')."\n".
                "NIT: ".$datos[0]->get('nit')."\n".
                "Direccion: ".$datos[0]->get('direccion')."\n".
                "Telefono: ".$datos[0]->get('telefono')."\n".
                "Correo: ".$datos[0]->get('correo')."\n",
                 0, // bordes 0 = no | 1 = si
                 "J", // texto justificado 
                 false);
                
                
                // Datos del cliente
            $pdf->SetFont('Arial','B',12);
            $pdf->SetXY(125, $top_datos);
            $pdf->Cell(190, 10, "Datos del cliente:", 0, 2, "J");
            $pdf->SetFont('Arial','',9);
            $pdf->MultiCell(
            190, //posición X
            5, //posicion Y
            "Nombre: ".$cliente[0]->get('nombre')."\n".
            "Cedula: ".$cliente[0]->get('cedula')."\n".
            "Direccion: ".$cliente[0]->get('direccion')."\n".
            "Telefono: ".$cliente[0]->get('telefono')."\n".
            "Correo: ".$cliente[0]->get('correo')."\n", 
            0, // bordes 0 = no | 1 = si
            "J", // texto justificado
            false);

            //Salto de línea
            $pdf->Ln(2);


            $top_productos = 110;
            $pdf->SetXY(25, $top_productos);
            $pdf->Cell(40, 5, 'CODIGO DE BARRAS', 0, 1, 'C');
            $pdf->SetXY(60, $top_productos);
            $pdf->Cell(40, 5, 'EDICION', 0, 1, 'C');
            $pdf->SetXY(95, $top_productos);
            $pdf->Cell(40, 5, 'CANTIDAD', 0, 1, 'C');  
            $pdf->SetXY(115, $top_productos);
            $pdf->Cell(40, 5, 'VALOR C/U', 0, 1, 'C');  
            $pdf->SetXY(145, $top_productos);
            $pdf->Cell(40, 5, 'VALOR TOTAL', 0, 1, 'C');  


            $total = 0; // variable para almacenar el subtotal
            $y = 115;
             
             foreach($this->post as $key=>$val){
                 if($key !== "cliente"){
                     
                     settype($data, 'object');
                     $data->factura = $maxf[0]->get('codigo');
                     $data->edicion = $key;
                     $data->cantidad = $val;
                     
                     $detalle = new detalle($data);
                     
                     
                        $cod['edicion']['codigo_de_barras'] = $key;
                        $auxiliars['edicion']=array("titulo"); 
                        $options['edicion']['lvl2'] = "factura";
                        $this->orm->connect();
                        $this->orm->read_data(array("edicion"), $options, $cod);
                        $edicion = $this->orm->get_objects("edicion",NULL,$auxiliars);

                        
                     
                    $this->orm->connect();
             
                    $this->orm->insert_data("normal", $detalle);

                    $this->orm->close();
                     
                    $pdf->SetFont('Arial','',8);
       
                    $pdf->SetXY(25, $y);
                    $pdf->Cell(40, 5, $key, 0, 1, 'C');
                    $pdf->SetXY(60, $y);
                    $pdf->Cell(40, 5, $edicion[0]->auxiliars['titulo']."-".$edicion[0]->get('formato'), 0, 1, 'C');
                    $pdf->SetXY(95, $y);
                    $pdf->Cell(40, 5,$val, 0, 1, 'C');  
                    $pdf->SetXY(115, $y);
                    $pdf->Cell(40, 5,$edicion[0]->get('precio'), 0, 1, 'C'); 
                    $pdf->SetXY(145, $y);
                    $pdf->Cell(40, 5,$edicion[0]->get('precio')*$val, 0, 1, 'C'); 

                 
                    $y = $y + 5;
                    $total = $total+ ($edicion[0]->get('precio')*$val);
                     
                 }
             }
             
            $pdf->Ln(2);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(190, 5, "TOTAL: $ $total ", 0, 1, "C");
            
             
             
            $pdf->Output($archivo_de_salida);//cierra el objeto pdf

            //Creacion de las cabeceras que generarán el archivo pdf
            header ("Content-Type: application/download");
            header ("Content-Disposition: attachment; filename=$archivo");
            header("Content-Length: " . filesize("$archivo"));
            $fp = fopen($archivo, "r");
            fpassthru($fp);
            fclose($fp);

            //Eliminación del archivo en el servidor
            unlink($archivo);
            $this->engine->assign('cargar', "ms.generado()");
            throw_exception("ms.generado()");
            
    }

    public function display()
	{		
        if($_SESSION['empleado']['tipo'] == 'C'){
            $options['cliente']['lvl2'] = "all";
            
            $this->orm->connect();
            $this->orm->read_data(array("cliente"), $options);
            $this->clientes = $this->orm->get_objects("cliente");
            $this->orm->close();
            
            $this->engine->assign('clientes', $this->clientes);
            
            $options['edicion']['lvl2']= "all";
            $auxiliars['edicion']=array("titulo","interprete","genero","ano_publicacion","caratula");  
            $this->orm->connect();
            $this->orm->read_data(array("edicion"), $options);
            $this->edicion = $this->orm->get_objects("edicion",null,$auxiliars);
            $this->orm->close();

            $this->engine->assign('edicion',  $this->edicion);
            //print_r2($this->edicion);
            $this->engine->assign('title',"Generar Factura");
            $this->engine->display('headerc.tpl');
            $this->engine->display('generarfactura.tpl');
            $this->engine->display('footerd.tpl');
            }else{
                 header('Location: iniciarsesion.php');
            }
	}
	
	public function run()
	{
            try{
                if(isset($this->get->option)){
                    $this->{$this->get->option}();
                }
                    
                
            }
            catch (Exception $e){
                $this->engine->assign('cargar',$e->getMessage())  ; 
            }
                $this->display();
	}
}

$call = new c_generarfactura();
$call->run();

?>

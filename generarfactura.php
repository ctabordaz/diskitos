<?php

require('configs/include.php');

class c_generarfactura extends super_controller {

	public function display()
	{		
            
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
	}
	
	public function run()
	{
            $this->display();
	}
}

$call = new c_generarfactura();
$call->run();

?>
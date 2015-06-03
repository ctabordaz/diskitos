<?php

/**
 * Project:     Framework G - G Light
 * File:        db.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2013-02-07
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class db
{
    var $server = C_DB_SERVER; //DB server
	var $user = C_DB_USER; //DB user
    var $pass = C_DB_PASS; //DB password
	var $db = C_DB_DATABASE_NAME; //DB database name
	var $limit = C_DB_LIMIT; //DB limit of elements by page
	var $cn;
	var $numpages;
	
	public function db(){}
	
	//connect to database
	public function connect()
	{
		$this->cn = mysqli_connect($this->server, $this->user, $this->pass);
		if(!$this->cn) {die("Failed connection to the database: ".mysqli_error($this->cn));}
		if(!mysqli_select_db($this->cn,$this->db)) {die("Unable to communicate with the database $db: ".mysqli_error($this->cn));}
		mysqli_query($this->cn,"SET NAMES utf8");
	}
	
	//function for doing multiple queries
	public function do_operation($operation, $class = NULL)
	{
		$result = mysqli_query($this->cn, $operation) ;
		if(!$result) {$this->throw_sql_exception($class);}	
	}
	
	//function for obtain data from db in object form
	private function get_data($operation)
	{		
		$data = array(); 
		$result = mysqli_query($this->cn, $operation) or die(mysqli_error($this->cn));
		while ($row = mysqli_fetch_object($result))
		{
			array_push($data, $row);
		}
		return $data;
	}
	
	//throw exception to web document
	private function throw_sql_exception($class)
    {
		$errno = mysqli_errno($this->cn); $error = mysqli_error($this->cn);
		$msg = $error."<br /><br /><b>Error number:</b> ".$errno;
        throw new Exception($msg);
    }
	
	//for avoid sql injections, this functions cleans the variables
	private function escape_string(&$data)
	{
		if(is_object($data))
		{
			foreach ($data->metadata() as $key => $attribute)
			{if(!is_empty($data->get($key))){$data->set($key,mysqli_real_escape_string($this->cn,$data->get($key)));}}
		}
		else if(is_array($data))
		{
			foreach ($data as $key => $value) 
			{if(!is_array($value)){$data[$key]=mysqli_real_escape_string($this->cn,$value);}}
		}
	}
	
	//function for add data to db
	public function insert($options,$object) 
	{
		switch($options['lvl1'])
		{																																																																																													
			case "user":
			switch($options['lvl2'])
			{
				case "normal":
					//
					break;
			}
			break;
			case "factura":
			switch($options['lvl2'])
			{
				case "normal":
                                    $cajero=mysqli_real_escape_string($this->cn,$object->get('cajero'));
                                    
                                    $this->do_operation("INSERT INTO factura (cajero) VALUES ('$cajero')");
				break;
			}
                        break;
			case "encabezado":
			switch($options['lvl2'])
			{
				case "normal":
                                    $factura=mysqli_real_escape_string($this->cn,$object->get('factura'));
                                    $cliente=mysqli_real_escape_string($this->cn,$object->get('cliente'));
                                    
                                    $this->do_operation("INSERT INTO encabezado (factura,cliente) VALUES ('$factura','$cliente')");
				break;
			}
			break;
			case "detalle":
			switch($options['lvl2'])
			{
				case "normal":
                                    $factura=mysqli_real_escape_string($this->cn,$object->get('factura'));
                                    $edicion=mysqli_real_escape_string($this->cn,$object->get('edicion'));
                                    $cantidad=mysqli_real_escape_string($this->cn,$object->get('cantidad'));
                                    
                                    $this->do_operation("INSERT INTO detalle (factura,edicion,cantidad) VALUES ('$factura','$edicion','$cantidad')");
                                    $this->do_operation("UPDATE edicion SET cantidad = cantidad - '$cantidad' WHERE codigo_de_barras = '$edicion';");
                                    break;
			}
			break;
                        case "album":
				switch($options['lvl2'])
				{
                                    case "album":
                                        $titulo=mysqli_real_escape_string($this->cn,$object->get('titulo'));
                                        $interprete=mysqli_real_escape_string($this->cn,$object->get('interprete'));
                                        $nro_catalogo=mysqli_real_escape_string($this->cn, $object->get('nro_catalogo'));
                                        $pais_origen=mysqli_real_escape_string($this->cn, $object->get('pais_origen'));
                                        $disquera=mysqli_real_escape_string($this->cn, $object->get('disquera'));
                                        $ano_publicacion=mysqli_real_escape_string($this->cn, $object->get('ano_publicacion'));
                                        $genero=mysqli_real_escape_string($this->cn, $object->get('genero'));
                                        $caratula=mysqli_real_escape_string($this->cn, $object->get('caratula'));

                                        $this->do_operation("INSERT INTO album (titulo, interprete, nro_catalogo, pais_origen, disquera, ano_publicacion, genero, caratula) VALUES ('$titulo', '$interprete', '$nro_catalogo', '$pais_origen','$disquera', '$ano_publicacion', '$genero', '$caratula' );");
                                        break;
				}
				break;
                        case "edicion":
				switch($options['lvl2'])
				{
                                    case "edicion":
                                       
                                        $codigo_de_barras=mysqli_real_escape_string($this->cn,$object->get('codigo_de_barras'));
                                        $formato=mysqli_real_escape_string($this->cn,$object->get('formato'));
                                        $cantidad=mysqli_real_escape_string($this->cn, $object->get('cantidad'));
                                        $precio=mysqli_real_escape_string($this->cn, $object->get('precio'));
                                        $album =mysqli_real_escape_string($this->cn,$object->get('album'));

                                        $this->do_operation("INSERT INTO edicion (codigo_de_barras, formato, cantidad, precio, album) VALUES ('$codigo_de_barras', '$formato', '$cantidad', '$precio', '$album' );");
                                        break;
				}
				break;
                        case "cancion":
				switch($options['lvl2'])
				{
                                    case "cancion":
                                       
                                        $nombre=mysqli_real_escape_string($this->cn,$object->get('nombre'));
                                        $compositor=mysqli_real_escape_string($this->cn, $object->get('compositor'));
                                        $duracion=mysqli_real_escape_string($this->cn, $object->get('duracion'));
                                        $album =mysqli_real_escape_string($this->cn,$object->get('album'));

                                        $this->do_operation("INSERT INTO cancion (nombre, compositor, duracion, album) VALUES ('$nombre', '$compositor', '$duracion', '$album' );");
                                        break;
				}
				break;
                        
                        case "empleado":
				switch($options['lvl2'])
				{
                                    case "empleado":
                                       
                                        $nombre = mysqli_real_escape_string($this->cn,$object->get('nombre'));
                                        $cedula = mysqli_real_escape_string($this->cn, $object->get('cedula'));
                                        $contraseña = mysqli_real_escape_string($this->cn, $object->get('contraseña'));
                                        $salario = mysqli_real_escape_string($this->cn,$object->get('salario'));
                                        $telefono = mysqli_real_escape_string($this->cn,$object->get('telefono'));
                                        $correo = mysqli_real_escape_string($this->cn,$object->get('correo'));
                                        $tipo = mysqli_real_escape_string($this->cn,$object->get('tipo'));
                                        
                                        $this->do_operation("INSERT INTO empleado VALUES ('$cedula', '$contraseña', "
                                                . "'$correo', '$nombre', '$salario', '$telefono', '$tipo');");
                                        break;
				}
				break;
                        
                        case "cliente":
				switch($options['lvl2'])
				{
                                    case "cliente":
                                       
                                        $nombre = mysqli_real_escape_string($this->cn,$object->get('nombre'));
                                        $cedula = mysqli_real_escape_string($this->cn, $object->get('cedula'));
                                        $telefono = mysqli_real_escape_string($this->cn,$object->get('telefono'));
                                        $correo = mysqli_real_escape_string($this->cn,$object->get('correo'));
                                        $direccion = mysqli_real_escape_string($this->cn,$object->get('direccion'));
                                        
                                        $this->do_operation("INSERT INTO cliente VALUES ('$cedula', '$nombre', "
                                                . "'$telefono', '$direccion', '$correo');");
                                        break;
				}
				break;
                            
                        case "encargo":
				switch($options['lvl2'])
				{
                                    case "encargo":
                                       
                                        $titulo_enc = mysqli_real_escape_string($this->cn,$object->get('titulo_enc'));
                                        $interprete_enc = mysqli_real_escape_string($this->cn,$object->get('interprete_enc'));
                                        $formato_enc = mysqli_real_escape_string($this->cn,$object->get('formato_enc'));
                                        $cliente = mysqli_real_escape_string($this->cn,$object->get('cliente'));

                                        $this->do_operation("INSERT INTO encargo (fecha, titulo_enc, interprete_enc, "
                                                . "formato_enc, cliente) VALUES (CURRENT_TIMESTAMP, '$titulo_enc', '$interprete_enc', "
                                                . "'$formato_enc', '$cliente');");
                                        break;
				}
				break;
                        case "pedido":
				switch($options['lvl2'])
				{
                                    case "pedido":
                                        $codigo=mysqli_real_escape_string($this->cn,$object->get('codigo'));
                                        $fecha=mysqli_real_escape_string($this->cn,$object->get('fecha'));
                                        $precio=mysqli_real_escape_string($this->cn, $object->get('precio'));
                                        $proveedor=mysqli_real_escape_string($this->cn, $object->get('proveedor'));
                                        $administrador=mysqli_real_escape_string($this->cn, $object->get('administrador'));

                                        $this->do_operation("INSERT INTO pedido VALUES ('$codigo', '$fecha', '$precio', '$proveedor', '$administrador');");
                                        break;
				}
				break;
			
			default: break;
		}
	}
	
	//function for edit data from db
	public function update($options,$object) 
	{
		switch($options['lvl1'])
		{																																																																																																		
			case "user":
			switch($options['lvl2'])
			{
				case "normal":
					//
					break;
			}
			break;
                    
                        case "edicion":
			switch($options['lvl2'])
			{
				case "one":
                                    $codigo_de_barras=mysqli_real_escape_string($this->cn,$object->get('codigo_de_barras'));
                                    $cantidad=mysqli_real_escape_string($this->cn,$object->get('cantidad'));
                                    $album=mysqli_real_escape_string($this->cn,$object->get('album'));
                                    $this->do_operation("UPDATE edicion SET cantidad = cantidad + '$cantidad' WHERE codigo_de_barras = '$codigo_de_barras' AND album = '$album';");
                                    break;
			}
			break;
			
			default: break;
		}
	}
	
	//function for delete data from db
	public function delete($options,$object)
	{
		switch($options['lvl1'])
		{																																																																																												
			case "user":
			switch($options['lvl2'])
			{
				case "normal": 
					//
					break;
			}
			break;
			
			default: break;			  
		}
	}
	
	//function that returns an array with data from a operation
	public function select($option,$data)
	{
		$info = array();
		switch($option['lvl1'])
		{																																																																																																										
			case "user":
                            switch($option['lvl2'])
                            {
                                case "all": 
                                    //
                                    break;
                            }
			break;
			
			case "factura":
                            switch($option['lvl2'])
                            {
                                case "max": 
                                     $info=$this->get_data("SELECT MAX(codigo) AS codigo FROM  factura LIMIT 0 , 1;");
                                    break;
                            }
			break;
			 case "empresa":
                            switch($option['lvl2'])
                            {
                                case "datos": 
                                     $info=$this->get_data("SELECT * FROM  empresa LIMIT 0 , 1;");
                                    break;
                            }
                        break;
                        case "cliente":
                            switch($option['lvl2'])
                            {
                                case "all": 
                                     $info=$this->get_data("SELECT * FROM cliente;");
                                    break;
                                case "count_by_ced" :
                                    $ced = mysqli_real_escape_string($this->cn,$data['cedula']);                            
                                    $info = $this->get_data("SELECT COUNT(*) AS contador FROM cliente WHERE cedula='$ced';");
                                    break;
                                case "factura" :
                                    $ced = mysqli_real_escape_string($this->cn,$data['cedula']);                            
                                    $info = $this->get_data("SELECT * FROM cliente WHERE cedula='$ced';");
                                    break;
                            }
                         break;
			case "edicion":
                            switch($option['lvl2'])
                            {
                                case "by_keyword": 
                                    $keyword = mysqli_real_escape_string($this->cn, $data['keyword']);
                                    $info=$this->get_data("SELECT e.*,a.* FROM edicion e, album a WHERE a.nro_catalogo = e.album AND (a.titulo LIKE '$keyword');");
                                    break;
                                case "factura": 
                                    $cod = mysqli_real_escape_string($this->cn, $data['codigo_de_barras']);
                                    $info=$this->get_data("SELECT e.*,a.* FROM edicion e, album a where a.nro_catalogo = e.album AND e.codigo_de_barras = '$cod';");
                                    break;
                                case "all": 
                                     $info=$this->get_data("select e.*,a.* from edicion e, album a where a.nro_catalogo = e.album;");
                                    break;
                                case "all_ea": 
                                    $cod = mysqli_real_escape_string($this->cn, $data['codigo_de_barras']);
                                    $info=$this->get_data("select e.*,a.* from edicion e, album a where a.nro_catalogo = e.album AND e.codigo_de_barras = '$cod';");
                                    break;
                            }
			break;
                    
                        case "empleado":
                            switch ($option['lvl2'])
                            {
                                case "all" :
                                    $info=$this->get_data("SELECT * FROM empleado;");
                                     break;
                                case "login":
                                    $cc=mysqli_real_escape_string($this->cn,$data['cedula']);
                                    
                                    
                                    //$password=mysqli_real_escape_string($this->cn,$data['contraseña']);
                                    //$info=$this->get_data("SELECT * FROM empleado WHERE cedula='$id' AND contraseña='$password';");
                                    
                                    $info=$this->get_data("SELECT * FROM empleado WHERE cedula='$cc';");
                                    break;
                                case "count_by_ced" :
                                    $ced = mysqli_real_escape_string($this->cn,$data['cedula']);                            
                                    $info = $this->get_data("SELECT COUNT(*) AS contador FROM empleado WHERE cedula='$ced';");
                                    break;
                            }
                        break;    
                    
                        case "album":
                            switch ($option['lvl2'])
                            {
                                case "count_by_ncatalogo" :
                                    $nro = mysqli_real_escape_string($this->cn,$data['nro_catalogo']);                            
                                    $info = $this->get_data("SELECT COUNT(*) AS contador FROM album WHERE nro_catalogo='$nro';");
                                    break;
                                case "buscar_ediciones_titulo":
                                    //print_r2($data);
                                    $texto = mysqli_real_escape_string($this->cn,$data['titulo']); 
                                        $txt1 = strtolower($texto);
                                        $txt2 = ucfirst($txt1);
                                        $txt3 = strtoupper($texto);
                                        $info = $this->get_data("SELECT DISTINCT e.codigo_de_barras, a.interprete, a.titulo, e.formato, e.precio, e.cantidad, a.ano_publicacion,  a.caratula, e.album
                                                                 FROM album a, edicion e
                                                                 WHERE (INSTR(a.titulo,'$txt1') >0 OR INSTR(a.titulo,'$txt2')>0 OR INSTR(a.titulo,'$txt3')>0)
                                                                 AND e.album=a.nro_catalogo;");
                                    break;
                                case "buscar_ediciones_interprete":
                                   // print_r2($data);
                                    $texto = mysqli_real_escape_string($this->cn,$data['interprete']); 
                                   // print_r2($texto);
                                        $txt1 = strtolower($texto);
                                        $txt2 = ucfirst($txt1);
                                        $txt3 = strtoupper($texto);
                                        $info = $this->get_data("SELECT  e.codigo_de_barras, a.titulo, a.interprete, e.formato, e.precio, e.cantidad, a.ano_publicacion,  a.caratula, e.album
                                                                 FROM album a, edicion e
                                                                 WHERE (INSTR(a.interprete,'$txt1') >0 OR INSTR(a.interprete,'$txt2')>0 OR INSTR(a.interprete,'$txt3')>0)
                                                                 AND e.album=a.nro_catalogo;");
                                    break;
                                
                            }
                        break;
                        case "cancion":
                                switch ($option['lvl2'])
                                {
                                    case "buscar_ediciones" :
                                        
                                        $texto = mysqli_real_escape_string($this->cn,$data['nombre']); 
                                        $txt1 = strtolower($texto);
                                        $txt2 = ucfirst($txt1);
                                        $txt3 = strtoupper($texto);
                                        $info = $this->get_data("SELECT DISTINCT e.codigo_de_barras,a.interprete, a.titulo, e.formato, e.precio, e.cantidad, a.ano_publicacion,  a.caratula, e.album
                                                                 FROM cancion c, album a, edicion e
                                                                 WHERE (INSTR(c.nombre,'$txt1') >0 OR INSTR(c.nombre,'$txt2')>0 OR INSTR(c.nombre,'$txt3')>0)
                                                                 AND c.album=a.nro_catalogo AND e.album=a.nro_catalogo;");
                                        break;
                                    
                                    case "las_canciones":
                                        $album = mysqli_real_escape_string($this->cn,$data['album']);                            
                                        $info = $this->get_data("SELECT * FROM cancion WHERE album='$album';");
                                                                           
                                        break;
                                }
                        break;
			
			default: break;
		}
		return $info;
	}
	
	//close the db connection
	public function close()
	{
		if($this->cn){mysqli_close($this->cn);}
	}
	
}

?>
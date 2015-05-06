<?php
// Recuperar el criterio de la busqueda
$criterio = strtolower($_GET["term"]);
if (!$criterio) return;
?>

[<?php
require('configs/include.php');

class c_actCant_refresh extends super_controller {
    
    function connect() {
        return new PDO('mysql:host=localhost;dbname=work', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    
    public function run(){
        /*$pdo = $this->connect();
        $keyword = '%'.$_GET["term"].'%';
        $sql = "SELECT e.*,a.* FROM edicion e, album a WHERE a.nro_catalogo = e.album AND (a.titulo LIKE (:keyword));";
        $query = $pdo->prepare($sql);
        $query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $query->execute();
        $list = $query->fetchAll();*/
        
        $keyword = '%'.$_GET["term"].'%';
        $options['edicion']['lvl2']="by_keyword";
        $auxiliars['edicion']=array("titulo","interprete","genero","ano_publicacion","caratula");
        $cod['edicion']['keyword'] = $keyword;
        
        $this->orm->connect();
        $this->orm->read_data(array("edicion"), $options, $cod);
	$this->ediciones = $this->orm->get_objects("edicion",null,$auxiliars);
        $this->orm->close();

        $contador = 0;
        foreach ($this->ediciones as $rs) 
        {
            // Atributos Edicion
            /*$codigo_de_barras = $rs['codigo_de_barras'];
            $formato = strtoupper($rs['formato']);
            $cantidad = $rs['cantidad'];
            $album = $rs['album'];*/
            
            $codigo_de_barras = $rs->get('codigo_de_barras');
            $formato = strtoupper($rs->get('formato'));
            $cantidad = $rs->get('cantidad');
            $album = $rs->get('album');

            // Atributos Album
            /*$titulo = $rs['titulo'];
            $interprete = $rs['interprete'];
            $ano_publicacion = $rs['ano_publicacion'];
            $caratula = $rs['caratula'];*/
            
            $titulo = $rs->auxiliars['titulo'];
            $interprete = $rs->auxiliars['interprete'];
            $ano_publicacion = $rs->auxiliars['ano_publicacion'];
            $caratula = $rs->auxiliars['caratula'];

            if ($contador++ > 0) print ", "; // agregamos esta linea porque cada elemento debe estar separado por una coma
            print "{ \"label\" : \"$titulo-$formato\", \"value\" : { \"codigo_de_barras\" : \"$codigo_de_barras\", \"formato\" : \"$formato\""
                . ", \"cantidad\" : \"$cantidad\", \"album\" : \"$album\", \"titulo\" : \"$titulo\", \"interprete\" : \"$interprete\""
                . ", \"ano_publicacion\" : \"$ano_publicacion\", \"caratula\" : \"$caratula\" } }";
        } // siguiente edicion
    }
}

$call = new c_actCant_refresh();
$call->run();

?>]
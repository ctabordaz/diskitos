<?php /* Smarty version Smarty-3.0.9, created on 2015-05-05 02:10:49
         compiled from "C:/xampp/htdocs/diskitos/templates\ingresarediciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338255480a8974e212-41513108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799ad76f3131ca8aed6aa7319549eb2645d2771d' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\ingresarediciones.tpl',
      1 => 1430784259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338255480a8974e212-41513108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingresar Ediciones</title>
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        
        <script src="./js/alertifyjs/alertify.min.js"></script>
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>

        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
disk.ico" />

        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
        
        <script src="./js/ingresaredicion2.js"></script>
    </head>
    <body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>
        
        <ul class="nav nav-tabs cabeza navbar-fixed-top">
            <li role="presentation"  ><a class="c" href="iniciarsesion.php">Regresar a Menú</a></li>
            <li role="presentation" class=" active navbar-right"><a class="bl"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>Administrador</a></li>
        </ul>
        
        <div id="content">
            <div class="row">
                <img src="./images/Admin/d2.jpg" />
            </div>

            <hr />
            <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
ingresarediciones.php?option=ingresar" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-5">
                            <p id="formato">Código de Barras:</p>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="codigo_de_barras" id="codigo_de_barras" class="form-control input-md chat-input" required />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-4">
                            <p id="formato" class="atredi">Formato:</p>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="formato" type="text" id="formatot" placeholder="Formato">
                                <option value ="cd">CD</option>
                                <option value ="dvd">DVD</option>
                                <option value ="lp">LP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="col-md-4">
                            <p id="formato" class="atredi2">Cantidad:</p>
                        </div>
                        <div class="col-md-8">
                            <input type="number" min="0" name="cantidad" id="cantidad" class="form-control input-md chat-input" placeholder="0" required/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-4">
                            <p id="formato" class="atredi">Precio:</p>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="precio" min="0" id="precio" class="form-control input-md chat-input" placeholder="0" required/>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <h4 id="caratula1">Álbum</h4>
                            <div class="col-md-4">
                                <p>Título:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="text" name="titulo" id="titulo" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Intérprete:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="text" name="interprete" id="interprete" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Nro Catálogo:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="number" name="nro_catalogo" min="0" id="catalogo" required/>
                                <input  type="hidden" name="album"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>País de Origen:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="text" name="pais_origen" id="paisorigen" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Disquera:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="text" name="disquera" id="disquera" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Año de publicación:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="number" min="0" max="2020" name="ano_publicacion" id="agepublicacion" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Género:</p>
                            </div>
                            <div class="col-md-8">
                                <input  type="text" name="genero" id="genero" required/>
                            </div>
                        </div>
                        <div class="row">
                            <p id="caratula1">Carátula:</p>
                        </div>
                        <div class="row">
                            <input id="caratula2" type="file" name="caratula">
                        </div>
                    </div>
                    <div class="col-md-7">

                        <h4>Canciones</h4>
                        <input type="hidden" id="nca" name="nca" value="1">
                        <div id="cancion">
                            <div class="sings">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p>Nombre: </p>
                                    </div>
                                    <div class="col-md-2">
                                        <input  type="text" name="ncancion1" id="ncancion1" required/>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-md-2">
                                        <p>Compositor: </p>
                                    </div>
                                    <div class="col-md-2">
                                        <input  type="text" name="ccancion1" id="ccancion1" required/>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class=" col-md-1 ">
                                        <p>Duración: </p>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2">
                                        <input  type="number" class="duracion" min="0" max="10" name="duraciona1" id="duraciona1" required/>
                                    </div>

                                    <div class="col-md-2">
                                        <input  type="number" class="duracion" min="0" max="59" name="duracionb1" id="duracionb1" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-md-2">
                                <p>
                                    <button type="button" class="btn btn-default btn-sm" onclick="ms.agregar()">
                                        <span class="glyphicon glyphicon-plus-sign"></span>Agregar
                                    </button>
                                </p>
                            </div>
                            <div class="col-md-2 col-md-offset-2">
                                <p>
                                    <button type="button" class="btn btn-default btn-sm" onclick="ms.eliminar()">
                                        <span class="glyphicon glyphicon-remove-sign"></span>Remover
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row">
                    <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Ingresar 
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
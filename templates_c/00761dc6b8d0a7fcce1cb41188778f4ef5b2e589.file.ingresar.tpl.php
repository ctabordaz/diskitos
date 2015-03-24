<?php /* Smarty version Smarty-3.0.9, created on 2015-03-24 00:29:06
         compiled from "C:/wamp/www/diskitos/templates\ingresar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239355510afd21b4db9-35751779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00761dc6b8d0a7fcce1cb41188778f4ef5b2e589' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\ingresar.tpl',
      1 => 1427156899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239355510afd21b4db9-35751779',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
            <div class="row">
                <img src="./images/Admin/d.jpg" />
            </div>
            
            <hr />
            
            <div class="row">
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <p id="formato">Formato:</p>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-control" type="text" placeholder="Formato">
                            <option value ="cd">CD</option>
                            <option value ="dvd">DVD</option>
                            <option value ="lp">LP</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <p id="formato">Precio:</p>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="precio" id="precio" class="form-control input-sm chat-input" placeholder="0" required/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-2">
                        <p id="formato">Carátula:</p>
                    </div>
                    <div class="col-sm-10">
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
            </div>
            
            <hr />
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Título:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="titulo" id="titulo" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Intérprete:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="interprete" id="interprete" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Nro Catálogo:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="catalogo" id="catalogo" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>País de Origen:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="paisorigen" id="paisorigen" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Disquera:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="disquera" id="disquera" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Año de publicación:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="agepublicacion" id="agepublicacion" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Género:</p>
                        </div>
                        <div class="col-sm-8">
                            <input class="atralbum" type="text" name="genero" id="genero" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    canciones
                </div>
            </div>
            
            <hr />
            
            <div class="row">
                <nav>
                    <ul class="pager">
                        <li><a class="ing" href="#">Ingresar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
<?php /* Smarty version Smarty-3.0.9, created on 2015-03-24 14:38:43
         compiled from "C:/wamp/www/diskitos/templates\ingresarediciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24281551176f36313f9-07673006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbeaa4487a49278af959d94d05a9cdfef8af6a3' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\ingresarediciones.tpl',
      1 => 1427207920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24281551176f36313f9-07673006',
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
            <form>
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-4">
                        <p id="formato">Formato:</p>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control" type="text" placeholder="Formato">
                            <option value ="cd">CD</option>
                            <option value ="dvd">DVD</option>
                            <option value ="lp">LP</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-4">
                        <p id="formato">Precio:</p>
                    </div>
                    <div class="col-md-8">
                        <input type="number" name="precio" id="precio" class="form-control input-md chat-input" placeholder="0" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-2">
                        <p id="formato">Carátula:</p>
                    </div>
                    <div class="col-md-10">
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
            </div>
            
            <hr />
            
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Título:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="titulo" id="titulo" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Intérprete:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="interprete" id="interprete" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Nro Catálogo:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="catalogo" id="catalogo" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>País de Origen:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="paisorigen" id="paisorigen" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Disquera:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="disquera" id="disquera" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Año de publicación:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="agepublicacion" id="agepublicacion" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Género:</p>
                        </div>
                        <div class="col-md-8">
                            <input class="atralbum" type="text" name="genero" id="genero" required/>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h4>Canciones</h4>
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
                            <input  type="text" class="duracion" name="ccancion1" id="ccancion1" required/> <p>:</p>
                        </div>
                        
                        <div class="col-md-2">
                            <input  type="text" class="duracion" name="ccancion1" id="ccancion1" required/>
                        </div>
                        

                    </div>
                    <div class="row">
                          
                        <div class="col-md-1 col-md-2">
                              
                              <a><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Ingresar</a>
                        </div>
                           
                    </div>
                    
                </div>
            </div>
            
            <hr />
            
            <div class="row">
                <nav>
                    <ul class="pager">
                        <li><a type="submit" class="ing" href="#">Ingresar</a></li>
                    </ul>
                </nav>
            </div>
            </form>
                </div>



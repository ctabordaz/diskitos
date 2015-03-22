<?php /* Smarty version Smarty-3.0.9, created on 2015-03-22 21:27:58
         compiled from "C:/wamp/www/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22205550f33de374991-17296863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45c917e989251f8842feff697a64e4579c842c0' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\iniciarsesion.tpl',
      1 => 1427059670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22205550f33de374991-17296863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <title>Incio Sesion</title>
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/diskitos.css">
    </head>
    <body>
        <div class="container">
        <div class="row arriba ">
        <div class="col-sm-4 col-sm-offset-4">
        <form class="form-horizontal">
            <div class="form-group">
              <label for="inputid" class="col-sm-2 control-label p">Identificación</label>
              <div class="col-sm-10 p">
                <input type="number" class="form-control" id="inputid" placeholder="Identificación">
              </div>
            </div>
            <div class="form-group">
              <label for="inputcontrasena" class="col-sm-2 control-label p">Contraseña</label>
              <div class="col-sm-10 p">
                <input type="password" class="form-control" id="inputcontrasena" placeholder="Contraseña">
              </div>
            </div>
            <div class="form-group ">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default ">Ingresar</button>
              </div>
            </div>
            </div>
        </div>
        </div>
      </form>
    </body>
</html>

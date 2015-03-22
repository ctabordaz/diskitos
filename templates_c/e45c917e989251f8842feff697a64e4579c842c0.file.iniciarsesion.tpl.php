<?php /* Smarty version Smarty-3.0.9, created on 2015-03-22 22:12:35
         compiled from "C:/wamp/www/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10098550f3e53cb68c1-61505442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45c917e989251f8842feff697a64e4579c842c0' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\iniciarsesion.tpl',
      1 => 1427062353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10098550f3e53cb68c1-61505442',
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
     <div class="container">
     <div class="row">
         <div class="col-md-offset-5 col-md-3 ">
             <div class="form-login ">
             <h4>Bienvenido a Diskitos S.A</h4>
             <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Identificación" />
             </br>
             <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" />
             </br>
             <div class="wrapper">
                 <button type="submit" class="btn btn-primary btn-sm">
                     <span class="glyphicon glyphicon-log-in "></span> Ingresar
                 </button>
             
             </div>
             </div>

         </div>
     </div>
 </div>
    </body>
</html>

<?php /* Smarty version Smarty-3.0.9, created on 2015-03-22 23:28:14
         compiled from "C:/xampp/htdocs/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30260550f41fe2df191-50608443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62f8998bcd507cb3168f8dc9cad5a5735d79f8b' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\iniciarsesion.tpl',
      1 => 1427063210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30260550f41fe2df191-50608443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <title>Incio Sesion</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="./css/resetLogin.css">
        <link rel="stylesheet" href="./css/supersizedLogin.css">
        <link rel="stylesheet" href="./css/styleLogin.css">
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
        
        <!-- Javascript -->
        <script src="./js/jquery-1.7.2.min.js"></script>
        <script src="./js/supersized.3.2.7.min.js"></script>
        <script src="./js/supersized-init.js"></script>
        <script src="./js/scripts.js"></script>
        
    </body>
</html>

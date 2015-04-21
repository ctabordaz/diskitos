<?php /* Smarty version Smarty-3.0.9, created on 2015-04-21 14:14:56
         compiled from "C:/wamp/www/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1975855365b60d2bae9-23590383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45c917e989251f8842feff697a64e4579c842c0' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\iniciarsesion.tpl',
      1 => 1429625638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1975855365b60d2bae9-23590383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio Sesion</title>
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./js/diskitos2.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/resetLogin.css">
        <link rel="stylesheet" href="./css/supersizedLogin.css">
        <link rel="stylesheet" href="./css/styleLogin.css">
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        
        <link rel="stylesheet"  href="./css/diskitos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body onload="ms.cargar()" >
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-4 ">
             
                    <form class="form-login " action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
iniciarsesion.php" method="post">
                        <h4 class="machete">Bienvenido a Diskitos S.A</h4>
                        <input type="text" name="cedula" id="cedula" class="form-control input-sm chat-input" placeholder="Identificación" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" required/></br>
                        <input type="password" name="contraseña" id="contraseña" class="form-control input-sm chat-input"value="" placeholder="Contraseña" required/>
                        <input type="hidden" name="option" value="login"/></br>
                        
                        <div class="wrapper">
                            <button type="submit" class="btn  btn-sm btn-login">
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Ingresar 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    
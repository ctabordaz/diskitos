<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 17:15:16
         compiled from "C:/wamp/www/diskitos/templates\headerc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2522556f1a0495fda0-84231114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'def4113bf3488f1128356021e522a0001a0e5071' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\headerc.tpl',
      1 => 1433343828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2522556f1a0495fda0-84231114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
disk.ico" />
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="./js/alertifyjs/alertify.min.js"></script>
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
     
        
</head>
<body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>
       <ul class="nav nav-tabs cabeza navbar-fixed-top">
            <li role="presentation"  ><a class="c" href="iniciarsesion.php">Regresar a Menú</a></li>
            <li role="presentation" class=" active navbar-right"><a class="bl"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>Cajero</a></li>
        </ul>
	
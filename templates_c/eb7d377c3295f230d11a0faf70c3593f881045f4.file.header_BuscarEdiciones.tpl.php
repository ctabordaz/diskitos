<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 17:05:20
         compiled from "C:/wamp/www/diskitos/templates\header_BuscarEdiciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21778556f17b0d3c997-35093646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb7d377c3295f230d11a0faf70c3593f881045f4' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\header_BuscarEdiciones.tpl',
      1 => 1433343828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21778556f17b0d3c997-35093646',
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
            <li role="presentation" class=" active navbar-right"><a class="bl"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $_smarty_tpl->getVariable('elusu')->value;?>
</a></li>
        </ul>
	
        
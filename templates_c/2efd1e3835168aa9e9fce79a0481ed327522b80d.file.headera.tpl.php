<?php /* Smarty version Smarty-3.0.9, created on 2015-04-25 06:44:23
         compiled from "C:/xampp/htdocs/diskitos/templates\headera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31550553b1ba77d5154-93834239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2efd1e3835168aa9e9fce79a0481ed327522b80d' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\headera.tpl',
      1 => 1429937052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31550553b1ba77d5154-93834239',
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
        
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
        <link rel="stylesheet" href="./js/chosen/chosen.css">
        <style type="text/css" media="all">
          /* fix rtl for demo */
          .chosen-rtl .chosen-drop { left: -9000px; }
        </style>
        
</head>
<body>
       <ul class="nav nav-tabs cabeza navbar-fixed-top">
            <li role="presentation"  ><a class="c" href="iniciarsesion.php">Regresar a Menú</a></li>
            <li role="presentation" class=" active navbar-right"><a class="bl"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>Administrador</a></li>
        </ul>
	
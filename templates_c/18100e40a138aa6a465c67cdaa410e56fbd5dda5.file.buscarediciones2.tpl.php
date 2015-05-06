<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 16:07:45
         compiled from "C:/xampp/htdocs/diskitos/templates\buscarediciones2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2065554a2031b8d2c9-52209209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18100e40a138aa6a465c67cdaa410e56fbd5dda5' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\buscarediciones2.tpl',
      1 => 1430921050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2065554a2031b8d2c9-52209209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<header>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/ingresarediciones.css" >
    <!-- <link rel="stylesheet" href="./css/bootstrap.css" >-->
</header>
<body>
<div class="container">
    <div class="row" col-sm-offset-6>
        <!-- A --> <br><br><br>
        <h1>Resultados de la Busqueda</h1><br><br>
    </div>
    <?php  $_smarty_tpl->tpl_vars['rc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resulconsul')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rc']->key => $_smarty_tpl->tpl_vars['rc']->value){
?>
    <div class="row" id='<?php echo $_smarty_tpl->getVariable('rc')->value->codigo_de_barras;?>
'>
        <div class="col-sm-3">
            <!-- B -->
            <input name="<?php echo $_smarty_tpl->getVariable('rc')->value->codigo_de_barras;?>
" type="checkbox" id="<?php echo $_smarty_tpl->getVariable('rc')->value->codigo_de_barras;?>
" value="<?php echo $_smarty_tpl->getVariable('rc')->value->codigo_de_barras;?>
" disabled/>
            <img  class="caratula" src="<?php echo $_smarty_tpl->getVariable('rc')->value->caratula;?>
" alt="todo murio" />
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="row">
                        <!-- C -->
                        <h4>Titulo: <?php echo $_smarty_tpl->getVariable('rc')->value->titulo;?>
</h4>
                    </div> 
                    <div class="row">
                        <!-- D -->
                        <h5>Año: <?php echo $_smarty_tpl->getVariable('rc')->value->ano_publicacion;?>
<h5> <br>   
                        <h5>Formato: <?php echo $_smarty_tpl->getVariable('rc')->value->formato;?>
</h5>
                    </div> 
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="row">
                        <!-- E -->
                        <h5>Artista: <?php echo $_smarty_tpl->getVariable('rc')->value->interprete;?>
</h5>
                    </div> 
                    <div class="row">
                        <!-- F -->
                        <h5>Cantidad: <?php echo $_smarty_tpl->getVariable('rc')->value->cantidad;?>
</h5>
                    </div> 
                </div>
            </div>
        </div>
    </div>
                    <br>
    <?php }} ?>
</div>
<input type="submit" value="Enviar" disabled align="center">
</body>
</html>
<?php /* Smarty version Smarty-3.0.9, created on 2015-06-01 04:18:56
         compiled from "C:/wamp/www/diskitos/templates\buscarediciones2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18587556bc110f08d41-82084955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c650fbacde6a21e2c630f10270deb34705bb5c' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\buscarediciones2.tpl',
      1 => 1433124992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18587556bc110f08d41-82084955',
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
            <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
buscarediciones.php?option=cancionero" method="post">
        <div class="row" id='<?php echo $_smarty_tpl->getVariable('rc')->value->codigo_de_barras;?>
'>
            <div class="col-sm-3">
                <!-- B -->
                <a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
buscarediciones.php?option=cancionero&album=<?php echo $_smarty_tpl->getVariable('rc')->value->album;?>
" onclick="javascript:void window.open('<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
buscarediciones.php?option=cancionero&album=<?php echo $_smarty_tpl->getVariable('rc')->value->album;?>
','1433123817331','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Canciones</a>
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
            </form>
        <?php }} ?>
    </div>
    
    </body>
</html>
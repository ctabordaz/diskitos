<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 09:19:36
         compiled from "C:/xampp/htdocs/diskitos/templates\realizarpedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8854556eaa88cd0dc1-36444170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c5a89e088432c5dfec2234ab1167e58114820c' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\realizarpedido.tpl',
      1 => 1433314169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8854556eaa88cd0dc1-36444170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container">
        <header class="codrops-header">
                <br>
                <h1>Relizar Pedido <span>Solicite los albumes a sus proveedores</span></h1>
        </header>
        <section class="content">
                <div class="dummy-browser">
                    <div class="dummy-header">
                        <p>Ediciones</p>
                    </div>
                    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
realizarpedido.php?option=pedir" method="post">
                        <div class="dummy-grid dummy-grid--filled">
                            
                            <?php  $_smarty_tpl->tpl_vars['edicion'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ediciones')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['edicion']->key => $_smarty_tpl->tpl_vars['edicion']->value){
?>
                                <?php $_smarty_tpl->tpl_vars['ed'] = new Smarty_variable($_smarty_tpl->getVariable('edicion')->value->get('auxiliars'), null, null);?>

                                <div class="dummy-grid__item">
                                    <img src="<?php echo $_smarty_tpl->getVariable('ed')->value['caratula'];?>
" /><br>
                                    <p id='det'><?php echo $_smarty_tpl->getVariable('ed')->value['titulo'];?>
 - <?php echo $_smarty_tpl->getVariable('ed')->value['interprete'];?>
</p>
                                    <p id='detalle'>Formato: <?php echo $_smarty_tpl->getVariable('edicion')->value->get('formato');?>
 - Precio: <?php echo $_smarty_tpl->getVariable('edicion')->value->get('precio')*0.8;?>
</p>
                                    <p id='detalle'>Cantidad a Pedir: <input type="number" name="cantidad-<?php echo $_smarty_tpl->getVariable('edicion')->value->get('codigo_de_barras');?>
" min="1"> </p>
                                    <p id='detalle'>Proveedor ............ : <input type="text" name="proveedor-<?php echo $_smarty_tpl->getVariable('edicion')->value->get('codigo_de_barras');?>
"> </p>
                                </div>

                            <?php }} ?>
                            
                        </div><!-- /dummy-grid -->
                        <div class="col-md-offset-5 col-md-2">
                            <input type="submit" value="Realizar Pedido" class="btn btn-primary btn-block btn-small botonPedir" tabindex="5">
                        </div>
                    </form>
                    <br><br><br>
                </div>
        </section> 
</div><!-- /container -->
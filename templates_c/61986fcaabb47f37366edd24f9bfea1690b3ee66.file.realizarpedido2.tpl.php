<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 17:20:20
         compiled from "C:/wamp/www/diskitos/templates\realizarpedido2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17640556f1b34cec341-85150060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61986fcaabb47f37366edd24f9bfea1690b3ee66' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\realizarpedido2.tpl',
      1 => 1433342068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17640556f1b34cec341-85150060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<br><br><br><br><br><br>

<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
realizarpedido.php?option=enviar" method="post">
    <div class="alert alert-info col-md-offset-4 col-md-4">
        <div class="row">
            <br>
            <h4 id="resumen">Resumen de pedido</h4>
        </div>
        <div class="row">
            <h5 id="resumen">---------------------------------------------------------------</h5>
            <h5 id="resumen">Items</h5>
        </div>
        <div class="col-md-offset-1 col-md-9">
            <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, null);?>
            <?php $_smarty_tpl->tpl_vars['prov'] = new Smarty_variable("x_x", null, null);?>

            <ol>        
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ediciones')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <?php $_smarty_tpl->tpl_vars['ed'] = new Smarty_variable($_smarty_tpl->getVariable('ediciones')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('auxiliars'), null, null);?>

                    <li><?php echo $_smarty_tpl->getVariable('ed')->value['titulo'];?>
 - <?php echo $_smarty_tpl->getVariable('ed')->value['interprete'];?>
 | <?php echo $_smarty_tpl->getVariable('cantidades')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
 unidades ........... $<?php echo $_smarty_tpl->getVariable('ediciones')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('precio')*0.8*$_smarty_tpl->getVariable('cantidades')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</li>
                    <input type="hidden" name="albumes[]" value="<?php echo $_smarty_tpl->getVariable('ediciones')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('album');?>
" />
                    <input type="hidden" name="barras[]" value="<?php echo $_smarty_tpl->getVariable('ediciones')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo_de_barras');?>
" />
                    
                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+$_smarty_tpl->getVariable('ediciones')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('precio')*0.8*$_smarty_tpl->getVariable('cantidades')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']], null, null);?>
                    
                    <?php if ($_smarty_tpl->getVariable('prov')->value=="x_x"){?>
                        <?php $_smarty_tpl->tpl_vars['prov'] = new Smarty_variable($_smarty_tpl->getVariable('proveedores')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']], null, null);?>
                    <?php }else{ ?>
                        <?php $_smarty_tpl->tpl_vars['prov'] = new Smarty_variable(($_smarty_tpl->getVariable('prov')->value)." - ".($_smarty_tpl->getVariable('proveedores')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]), null, null);?>
                    <?php }?>
                <?php endfor; endif; ?>
            </ol>
        </div>

            <br><br><br><br>

        <div class="row">
            <h5 id="resumen">---------------------------------------------------------------</h5>
            <h5 id="resumen">Total</h5>
        </div>
        <div class="col-md-offset-1 col-md-9">
            <ul>
                <li>$<?php echo $_smarty_tpl->getVariable('total')->value;?>
</li>
            </ul>
        </div>
           
            <br>
            
        <div class="row">
            <h5 id="resumen">---------------------------------------------------------------</h5>
        </div>
            
            <br>
            
        <div class="col-md-offset-4 col-md-5">
            <input type="hidden" name="precio" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
">
            <input type="hidden" name="proveedor" value="<?php echo $_smarty_tpl->getVariable('prov')->value;?>
">
            <input type="submit" value="Realizar Pedido" class="btn btn-primary btn-block btn-small botonPedir" tabindex="5">
        </div>
            <br><br><br><br>
    </div> 
</form>

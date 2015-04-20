<?php /* Smarty version Smarty-3.0.9, created on 2015-04-20 17:51:59
         compiled from "C:/wamp/www/diskitos/templates\actualizarcantidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310855535209fde6046-88262357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa4e5e1c9270fa697cfccefaa25a06eeca03ef3' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\actualizarcantidad.tpl',
      1 => 1429543442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310855535209fde6046-88262357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
            
    <div class="row">
        <img class="img" src="./images/Admin/d.jpg" />
    </div>

    <hr />
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
actualizarcantidad.php?option=actualizar" method="post" enctype="multipart/form-data">
        <div class="row">
           
            <div class="col-md-4">
                <div class="col-md-5">
                    <p id="formato">Edición:</p>
                </div>
                <div class="col-md-7">
                    <select name="edicion">
                        <option>Seleccionar</option>
                       <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edicion')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                           <option value="<?php echo $_smarty_tpl->getVariable('e')->value->get('codigo_de_barras');?>
"><?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['titulo'];?>
-<?php echo $_smarty_tpl->getVariable('e')->value->get('formato');?>
</option>
                       <?php }} ?>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="row">
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edicion')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                    <div id='<?php echo $_smarty_tpl->getVariable('e')->value->get('codigo_de_barras');?>
'><br>
                        <img  class="caratula" src="<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['caratula'];?>
"  />
                    
                    </div>  
                <?php }} ?>

        </div>          

        <hr />

        

        <hr />

        <div class="row">
            <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Ingresar 
            </button>
        </div>
    </form>
</div>



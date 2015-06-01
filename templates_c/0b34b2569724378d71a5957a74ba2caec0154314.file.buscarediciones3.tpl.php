<?php /* Smarty version Smarty-3.0.9, created on 2015-06-01 04:18:35
         compiled from "C:/wamp/www/diskitos/templates\buscarediciones3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5290556bc0fbf2c693-36182864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b34b2569724378d71a5957a74ba2caec0154314' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\buscarediciones3.tpl',
      1 => 1433125113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5290556bc0fbf2c693-36182864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['lc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lascanciones')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lc']->key => $_smarty_tpl->tpl_vars['lc']->value){
?>
    <?php echo $_smarty_tpl->getVariable('lc')->value->nombre;?>

    <br>
<?php }} ?>
<?php /* Smarty version Smarty-3.0.9, created on 2015-03-23 17:05:24
         compiled from "C:/wamp/www/diskitos/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29015551047d48d6200-09842231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b362de11e6150b9388f582b97878fd219a47fd99' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\message.tpl',
      1 => 1354314637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29015551047d48d6200-09842231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>

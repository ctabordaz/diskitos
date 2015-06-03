<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 16:56:16
         compiled from "C:/wamp/www/diskitos/templates\buscarediciones3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22150556f159098d8f4-56865960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b34b2569724378d71a5957a74ba2caec0154314' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\buscarediciones3.tpl',
      1 => 1433343373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22150556f159098d8f4-56865960',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <header>
        <meta charset="UTF-8">
            <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
disk.ico" />
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/buscarediciones.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </header>
    <body>
        <table class="table table-hover">
            <tr>
                <th>Nombre Canción</th>
                <th>Duración</th>
            </tr>
            
            <?php  $_smarty_tpl->tpl_vars['lc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lascanciones')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lc']->key => $_smarty_tpl->tpl_vars['lc']->value){
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('lc')->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->getVariable('lc')->value->duracion;?>
</td>
                </tr>
            <?php }} ?>
        </table>

    </body>
</html>
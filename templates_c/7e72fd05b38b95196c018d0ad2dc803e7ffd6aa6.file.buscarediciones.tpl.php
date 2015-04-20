<?php /* Smarty version Smarty-3.0.9, created on 2015-04-20 19:19:31
         compiled from "C:/wamp/www/diskitos/templates\buscarediciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29369553535237ca873-45804790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e72fd05b38b95196c018d0ad2dc803e7ffd6aa6' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\buscarediciones.tpl',
      1 => 1429550363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29369553535237ca873-45804790',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
buscarediciones.php?option=consultar" method="post" >
        <h1>Consulta de Ediciones </h1>
        </br>
         
        <label for="id">Palabra a Buscar <input type="text" name="id" id="id" placeholder="Titulo, Autor o Cancion"></label></br>
        <input type="submit" name="enviar">
    </form>       
</div>
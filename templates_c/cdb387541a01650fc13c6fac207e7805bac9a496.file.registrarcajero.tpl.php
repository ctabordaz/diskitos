<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 04:53:21
         compiled from "C:/wamp/www/diskitos/templates\registrarcajero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11334553ff4cb0cb9c6-45902655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb387541a01650fc13c6fac207e7805bac9a496' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\registrarcajero.tpl',
      1 => 1430869642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11334553ff4cb0cb9c6-45902655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<br><br><br><br><br><br>
<div id="content">
    <div class="container">  
        <br><br>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-1">
                <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrarcajero.php?option=consultar" method="post">
                    <h2>Registrar Cajero <small>Ingrese la cédula a registrar.</small></h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="number" name="cedula" id="cedula" class="form-control input-lg" placeholder="Cedula" tabindex="3" required />
                    </div>
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <br><br>
</div>
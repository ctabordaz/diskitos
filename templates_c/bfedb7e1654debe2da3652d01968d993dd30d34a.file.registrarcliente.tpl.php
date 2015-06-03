<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 13:59:11
         compiled from "C:/wamp/www/diskitos/templates\registrarcliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28525556f082fafb727-81801539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfedb7e1654debe2da3652d01968d993dd30d34a' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\registrarcliente.tpl',
      1 => 1431006703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28525556f082fafb727-81801539',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>
    <br><br><br><br><br><br>
    <div id="content">
        <div class="container">  
            <br><br>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-1">
                    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrarcliente.php?option=consultar" method="post">
                        <h2>Registrar Cliente <small>Ingrese la cédula a registrar.</small></h2>
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
        <br>
        <br><br>
    </div>
</body>
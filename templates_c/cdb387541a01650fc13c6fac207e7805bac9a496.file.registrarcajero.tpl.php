<?php /* Smarty version Smarty-3.0.9, created on 2015-04-28 22:59:55
         compiled from "C:/wamp/www/diskitos/templates\registrarcajero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11334553ff4cb0cb9c6-45902655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb387541a01650fc13c6fac207e7805bac9a496' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\registrarcajero.tpl',
      1 => 1430029612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11334553ff4cb0cb9c6-45902655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
    <div class="container">  
        <br><br><br><br>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-1">
                <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrarcajero.php?option=registrar" method="post">
                    <h2>Registrar Cajero <small>Por favor complete todos los campos.</small></h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control input-lg" placeholder="Nombre" tabindex="3" required />
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="number" name="cedula" id="cedula" min="1" class="form-control input-lg" placeholder="Cédula" tabindex="2" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="number" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="1" required />
                            </div>
                        </div>                        
                    </div>                
                    <div class="form-group">
                        <input type="email" name="correo" id="correo" class="form-control input-lg" placeholder="Correo electrónico" tabindex="4" required />
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="contraseña" id="contraseña" class="form-control input-lg" placeholder="Contraseña" tabindex="5" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="number" name="salario" id="salario" min="0" class="form-control input-lg" placeholder="Salario" tabindex="6" required />
                                <input type="hidden" name="tipo" id="tipo" />
                            </div>
                        </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr />
    
    <br><br>
</div>
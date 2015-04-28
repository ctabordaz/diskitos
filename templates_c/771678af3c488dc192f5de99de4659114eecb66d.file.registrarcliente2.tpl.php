<?php /* Smarty version Smarty-3.0.9, created on 2015-04-28 23:38:29
         compiled from "C:/wamp/www/diskitos/templates\registrarcliente2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24338553ffdd5f39d10-71714866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771678af3c488dc192f5de99de4659114eecb66d' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\registrarcliente2.tpl',
      1 => 1430257037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24338553ffdd5f39d10-71714866',
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
registrarcliente.php?option=registrar" method="post">
                    <h2>Registrar Cliente <small>Por favor complete todos los campos.</small></h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control input-lg" placeholder="Nombre" tabindex="3" required />
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="number" name="telefono" id="telefono" min="1" class="form-control input-lg" placeholder="Telefono" tabindex="2" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Direccion" tabindex="1" required />
                            </div>
                        </div>                       
                    </div>                
                    <div class="form-group">
                        <input type="email" name="correo" id="correo" class="form-control input-lg" placeholder="Correo electrónico" tabindex="4" required />
                    </div>
                    
                    <input type="hidden" name="cedula" id="cedula" value="$cedula" />
                   

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
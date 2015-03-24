<?php /* Smarty version Smarty-3.0.9, created on 2015-03-24 03:21:36
         compiled from "C:/wamp/www/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91455510d8406c0b60-30059391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45c917e989251f8842feff697a64e4579c842c0' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\iniciarsesion.tpl',
      1 => 1427167293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91455510d8406c0b60-30059391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <title>Incio Sesion</title>
        
        
        <script src="./js/diskitos2.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/resetLogin.css">
        <link rel="stylesheet" href="./css/supersizedLogin.css">
        <link rel="stylesheet" href="./css/styleLogin.css">
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        
        <link rel="stylesheet"  href="./css/diskitos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body onload="ms.cargar()" >
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-4 ">
             
                    <form class="form-login " action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
iniciarsesion.php" method="post">
                        <h4 class="machete">Bienvenido a Diskitos S.A</h4>
                        <input type="text" name="cedula" id="cedula" class="form-control input-sm chat-input" placeholder="Identificación" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" required/></br>
                        <input type="password" name="contraseña" id="contraseña" class="form-control input-sm chat-input"value="" placeholder="Contraseña" required/>
                        <input type="hidden" name="option" value="login"/></br>
                        
                        <div class="wrapper">
                            <button type="submit" class="btn  btn-sm btn-login">
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Ingresar 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Javascript -->
        <script src="./js/jquery-1.7.2.min.js"></script>
        <script src="./js/supersized.3.2.7.min.js"></script>
        <script src="./js/supersized-init.js"></script>
        <script src="./js/scripts.js"></script>
    
    </body>
</html>

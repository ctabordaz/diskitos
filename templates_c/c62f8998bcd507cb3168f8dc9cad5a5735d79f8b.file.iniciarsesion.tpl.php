<?php /* Smarty version Smarty-3.0.9, created on 2015-04-22 18:04:36
         compiled from "C:/xampp/htdocs/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208385537c694a08146-33107783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62f8998bcd507cb3168f8dc9cad5a5735d79f8b' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\iniciarsesion.tpl',
      1 => 1429718433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208385537c694a08146-33107783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio Sesion</title>
        
        <script src="./js/diskitos2.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./js/alertifyjs/alertify.min.js"></script>
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/resetLogin.css">
        <link rel="stylesheet" href="./css/supersizedLogin.css">
        <link rel="stylesheet" href="./css/styleLogin.css">
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        
        <link rel="stylesheet"  href="./css/diskitos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>
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
        <script src="./js/supersized.3.2.7.min.js"></script>
        <script src="./js/supersized-init.js"></script>
        <script src="./js/scripts.js"></script>
    
    </body>
</html>

        
    
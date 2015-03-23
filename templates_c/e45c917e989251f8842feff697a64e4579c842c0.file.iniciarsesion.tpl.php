<?php /* Smarty version Smarty-3.0.9, created on 2015-03-23 03:16:10
         compiled from "C:/wamp/www/diskitos/templates\iniciarsesion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267550f857acf73d6-59601963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45c917e989251f8842feff697a64e4579c842c0' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\iniciarsesion.tpl',
      1 => 1427080562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267550f857acf73d6-59601963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <title>Incio Sesion</title>
        
        <script src="./js/diskitos.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/resetLogin.css">
        <link rel="stylesheet" href="./css/supersizedLogin.css">
        <link rel="stylesheet" href="./css/styleLogin.css">
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        
        <link rel="stylesheet"  href="./css/diskitos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
     <div class="container">
     <div class="row">
         
         <div class="col-md-offset-5 col-md-4 ">
             
             <form class="form-login " action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
iniciarsesion.php" method="post">
             <h4 class="machete">Bienvenido a Diskitos S.A <?php echo $_smarty_tpl->getVariable('emp')->value->get('nombre');?>
</h4>
             <input type="text" id="identificacion" class="form-control input-sm chat-input" placeholder="Identificación" required/>
             </br>
             <input type="password" id="contraseña" class="form-control input-sm chat-input" placeholder="Contraseña" required/>
             <input type="hidden" name="option" value="validar"/>
             </br>
             <div class="wrapper">
                 
                     <button type="submit" class="btn  btn-sm btn-login" onclick="ms.validar()" >
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

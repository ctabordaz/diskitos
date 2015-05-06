<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 17:48:00
         compiled from "C:/xampp/htdocs/diskitos/templates\actualizarcantidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17438554a37b056c7e7-17613938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eeabb8c825869f0d9f8011edbf3aeaee5274a6e' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\actualizarcantidad.tpl',
      1 => 1430927276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17438554a37b056c7e7-17613938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="css/jquery.ui.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
    <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
    <link rel="stylesheet" href="css/ingresarediciones.css" />
    <link rel="stylesheet" href="css/actualizarcantidad.css" />
    <script type="text/javascript" src="js/jquery.1.7.1.js"></script>
    <script type="text/javascript" src="js/jquery.ui.1.8.16.js"></script>
    <script src="./js/alertifyjs/alertify.min.js"></script>
    <script src="./js/actualizarcantidad.js"></script>
    <script type="text/javascript" src="js/sc.js"></script>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
disk.ico" />
</head>
<body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>

  <div id="content">
              
      <div class="row">
          <img src="./images/Admin/d2.jpg" />
      </div>

      <hr />
      <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
actualizarcantidad.php?option=actualizar" method="post" enctype="multipart/form-data">
          <div class="row">
             
              <div>
                  <div class="row">
                      <table class="table1">
                            <tr>
                                <th>Ingresar Edición:</th>
                                <td class="td_puntos">....</td>
                                <td>
                                  <input type="text" id="txtEdicion" class="form-control input-md chat-input"/>
                                </td>
                            </tr>
                      </table>  
                  </div>
              </div>
              
          </div>

          <hr />

          <div class="row">
            <table>
              <tr>
                <td>
                  <div class="col-md-8">
                    <img  class="caratula" id="caratula" />
                  </div>
                </td>
                <td>
                  <div class="col-md-12">
                    <div class="row">
                      <label id="lblTitulo">Título: </label>
                    </div>
                    <div class="row">
                      <label id="lblInterprete">Intérprete: </label>
                    </div>
                    <div class="row">
                      <label id="lblAnno">Año: </label>
                    </div>
                    <div class="row">
                      <label id="lblFormato">Formato: </label>
                    </div>
                    <div class="row">
                      <label id="lblCantidad">Cantidad: </label>
                    </div>
                    <input type="hidden" id="codigo_de_barras" name="codigo_de_barras">
                    <input type="hidden" id="album" name="album">
                  </div>
                </td>
              </tr>
            </table>
          </div>

          

          <hr />
            <!-- Input text actualizar cantidad-->
            <table>
              <tr>
                <td>
                  <label>Cantidad a aumentar: </label>
                </td>
                <td class="td_puntos">....</td>
                <td>
                  <input type="number" class="form-control input-md chat-input" id="cantidad_aumentar" name="cantidad">
                </td>
              </tr>
            </table>
          <hr />

          <div class="row">
              <button id="actualizar" type="submit" class="btn  btn-sm btn-login" >
                  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Actualizar
              </button>
          </div>
      </form>
  </div>

</body>
</html>
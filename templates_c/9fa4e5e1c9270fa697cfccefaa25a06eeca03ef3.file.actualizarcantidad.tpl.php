<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 16:45:39
         compiled from "C:/wamp/www/diskitos/templates\actualizarcantidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22771556f1313aeed89-08108051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa4e5e1c9270fa697cfccefaa25a06eeca03ef3' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\actualizarcantidad.tpl',
      1 => 1433342068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22771556f1313aeed89-08108051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Cantidad</title>
        
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
disk.ico" />
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="./js/chosen/docsupport/prism.css">
        <link rel="stylesheet" href="./js/chosen/chosen.css">
        <script src="./js/actualizarcantidad.js"></script>
        
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
                    <div class="col-md-2">
                        <h4>Edición:</h4>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="side-by-side clearfix">
            
                            <select id="ediciones" data-placeholder="Seleccione una edición..." class="chosen-select" style="width:350px;" tabindex="2">
                                   <option value=""></option>
                                   <?php $_smarty_tpl->tpl_vars["j"] = new Smarty_variable(0, null, null);?>
                                  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('edicion')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                      <option value="<?php echo $_smarty_tpl->getVariable('j')->value;?>
"><?php echo $_smarty_tpl->getVariable('edicion')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['titulo'];?>
-<?php echo $_smarty_tpl->getVariable('edicion')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('formato');?>
</option>
                                       <?php $_smarty_tpl->tpl_vars["j"] = new Smarty_variable($_smarty_tpl->getVariable('j')->value+1, null, null);?>
                                  <?php endfor; endif; ?>
                            </select>
                        </div>
                    </div>          
                </div>

                <hr />

                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <img  class="caratula" id="caratula" />
                    </div>
                    <div class="col-md-5">
                      <table>
                        <tr>
                          <td>
                              <br>
                              <big id="lblTitulo"></big>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <big id="lblInterprete"> </big>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <big id="lblAnno"></big>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <big id="lblFormato"></big>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <big id="lblCantidad"></big>
                        
                              <input type="hidden" id="codigo_de_barras" name="codigo_de_barras">
                              <input type="hidden" id="album" name="album">
                          </td>
                        </tr>
                      </table>
                    </div>
                </div>

                <hr />
                <!-- Input text actualizar cantidad-->
                <div class="row">
                    <div class="col-md-3">
                        <h4>Cantidad a aumentar:</h4>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="number" class="form-control input-md chat-input" id="cantidad_aumentar" name="cantidad">
                    </div>          
                </div>

                <hr />

                <div class="row">
                    <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Actualizar 
                    </button>
                </div>
            </form>
        </div>
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./js/alertifyjs/alertify.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="./js/jquery.backstretch.min.js"></script>
        <script src="./js/chosen/chosen.jquery.js" type="text/javascript"></script>
        <script src="./js/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
          $(function() 
          {

            var ediciones = [];

            <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edicion')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
              var edicion = new Object();
              edicion.caratula = "<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['caratula'];?>
";
              edicion.titulo = "<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['titulo'];?>
";
              edicion.interprete = "<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['interprete'];?>
";
              edicion.ano_publicacion = "<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['ano_publicacion'];?>
";
              edicion.formato = "<?php echo $_smarty_tpl->getVariable('e')->value->get('formato');?>
";
              edicion.cantidad = "<?php echo $_smarty_tpl->getVariable('e')->value->get('cantidad');?>
";
              edicion.cod = "<?php echo $_smarty_tpl->getVariable('e')->value->get('codigo_de_barras');?>
";
              edicion.album = "<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['nro_catalogo'];?>
";
              ediciones.push(edicion);
            <?php }} ?>

            $("#ediciones").chosen().change(function(){
              var n = $("#ediciones option:selected").val();
              
              if(n !== ""){
                $("#lblTitulo").text("Título: "+ediciones[n].titulo);
                $("#lblInterprete").text("Intérprete: "+ediciones[n].interprete);
                $("#lblAnno").text("Año: "+ediciones[n].ano_publicacion);
                $("#lblFormato").text("Formato: "+ediciones[n].formato);
                $("#lblCantidad").text("Cantidad: "+ediciones[n].cantidad);

                document.getElementById("caratula").src = ediciones[n].caratula;

                $("#codigo_de_barras").val(ediciones[n].cod);
                $("#album").val(ediciones[n].album);
              }
            });
          });
        </script> 
        <script type="text/javascript">
          var config = {
            '.chosen-select'           : {
            },
            '.chosen-select-deselect'  : {
                allow_single_deselect:true},
            '.chosen-select-no-single' : {
                disable_search_threshold:10},
            '.chosen-select-no-results': {
                no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {
                width:"95%"}
          }
          for (var selector in config) {
            $(selector).chosen(config[selector]);
          }
        </script>

    </body>
</html>
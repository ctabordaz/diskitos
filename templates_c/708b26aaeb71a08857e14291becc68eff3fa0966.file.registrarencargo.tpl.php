<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 07:20:07
         compiled from "C:/wamp/www/diskitos/templates\registrarencargo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17803556e8e87bbdfb2-77394961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708b26aaeb71a08857e14291becc68eff3fa0966' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\registrarencargo.tpl',
      1 => 1433308788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17803556e8e87bbdfb2-77394961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar Encargo</title>
        
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
disk.ico" />
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="./js/chosen/docsupport/prism.css">
        <link rel="stylesheet" href="./js/chosen/chosen.css">
        <script src="./js/registrarencargo.js"></script>
        
    </head>
    <body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>
        
        <ul class="nav nav-tabs cabeza navbar-fixed-top">
            <li role="presentation"  ><a class="c" href="iniciarsesion.php">Regresar a Menú</a></li>
            <li role="presentation" class=" active navbar-right"><a class="bl"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>Cajero</a></li>
        </ul>
        
        <div id="content">
            <div class="row">
                <img src="./images/Admin/d2.jpg" />
            </div>

            <hr />
            <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrarencargo.php?option=registrar" method="post" enctype="multipart/form-data">
                
                <div class="row">
                    <div class="col-md-2">
                        <h4>Cliente:</h4>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="side-by-side clearfix">
                            <select id="clientes" data-placeholder="Seleccione un cliente..." class="chosen-select" style="width:350px" tabindex="2">
                                <option value=""></option>
                                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                                    <option value="<?php echo $_smarty_tpl->getVariable('e')->value->get('cedula');?>
"><?php echo $_smarty_tpl->getVariable('e')->value->get('cedula');?>
 - <?php echo $_smarty_tpl->getVariable('e')->value->get('nombre');?>
</option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>                 
                </div>
                <hr />

                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <h4 id="caratula1">Álbum</h4>
                            <div class="col-md-3">
                                <p>Título:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input type="text" name="titulo_enc" id="titulo_enc" required />
                            </div>
                        </div>

                        <div class="row">
                            <h4 id="caratula1">Formato</h4>
                            <div class="col-md-1">
                                
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" name="formato_enc" type="text" id="formatot" placeholder="Formato">
                                    <option value ="cd">CD</option>
                                    <option value ="dvd">DVD</option>
                                    <option value ="lp">LP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <br>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Intérprete:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input  type="text" name="interprete_enc" id="interprete_enc" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="cliente" name="cliente">

                <hr />

                <div class="row">
                    <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Registrar 
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
            $("#clientes").chosen().change(function(){
              var n = $("#clientes option:selected").val();
              
              if(n !== ""){
                $("#cliente").val(n);
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
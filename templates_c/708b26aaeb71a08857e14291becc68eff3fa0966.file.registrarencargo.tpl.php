<?php /* Smarty version Smarty-3.0.9, created on 2015-06-01 19:32:40
         compiled from "C:/wamp/www/diskitos/templates\registrarencargo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11867556c9738524126-38891563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708b26aaeb71a08857e14291becc68eff3fa0966' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\registrarencargo.tpl',
      1 => 1433179934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11867556c9738524126-38891563',
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
        
    </head>
    <body>
        
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
                        <label>Cliente:</label>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="side-by-side clearfix">
                            <select name="cliente" data-placeholder="Seleccione un cliente..." class="chosen-select" style="width:350px;" tabindex="2">
                                <option value=""></option>
                                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                                    <option value="<?php echo $_smarty_tpl->getVariable('e')->value->get('cedula');?>
"><?php echo $_smarty_tpl->getVariable('e')->value->get('cedula');?>
-<?php echo $_smarty_tpl->getVariable('e')->value->get('nombre');?>
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
                            <div class="col-md-4">
                                <p>Título:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input type="text" name="titulo" id="titulo" required />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <p>Género:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input  type="text" name="genero" id="genero" required/>
                            </div>
                        </div>

                        <div class="row">
                            <h4 id="caratula1">Formato</h4>
                            <div class="col-md-5">
                                <select class="form-control" name="formato" type="text" id="formatot" placeholder="Formato">
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
                            <div class="col-md-4">
                                <p>Intérprete:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input  type="text" name="interprete" id="interprete" required/>
                            </div>
                        </div>
                    </div>
                </div>

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
        
        <script>
            $.backstretch(["./images/Admin/Tocadiscos2.jpg"]);
        </script>

        <script type="text/javascript">
            
            var ediciones = [];
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edicion')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                        var edicion = new Object();
                        edicion.cod = <?php echo $_smarty_tpl->getVariable('e')->value->get('codigo_de_barras');?>
;
                        edicion.cantidad = <?php echo $_smarty_tpl->getVariable('e')->value->get('cantidad');?>
;
                        edicion.precio = <?php echo $_smarty_tpl->getVariable('e')->value->get('precio');?>
;
                        edicion.titulo = "<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['titulo'];?>
-<?php echo $_smarty_tpl->getVariable('e')->value->get('formato');?>
";
                        ediciones.push(edicion);
                <?php }} ?>
            
            $("#agregar").click(function(){
                
                
                 var n = $("#ediciones option:selected").val();
                 if(n !== ""){
                     var flag=0;
                     $(".codb").each(function(){
                         if($(this).text() == ediciones[n].cod){
                              flag = 1;
                         }
            
                     });
                     
                     if(flag !== 1){
                     
                          var boton = "<button  type='button' id='"+n+"' class='eliminarf btn btn-default btn-circle btn-lg'><i class='glyphicon glyphicon-minus'></i></button>";
                         $("#tabla tr:last").after("<tr><td class='codb'>"
                                 +ediciones[n].cod+
                                 "</td><td>"
                                 +ediciones[n].titulo+
                                 "</td><td>"
                                 +ediciones[n].cantidad+
                                 "</td><td><input type='number' min=0  max="+ediciones[n].cantidad+" name='"+ediciones[n].cod+"' onChange='valort(this.value,"+ediciones[n].precio+","+ediciones[n].cod+");' class='mytext'></td><td>"
                                 +ediciones[n].precio+
                                 "</td><td><spam  class='"+ediciones[n].cod+" vt'"+"></spam></td><td>"
                                 +boton+
                                 "</td></tr>");  
                    }}
                     
            });
            
            
             $(document).on('click','.eliminarf',function(){
                    
                var objFila=$(this).parents().get(1);
                     $(objFila).remove();
                     
               total = 0;
            $(".vt").each(
                function(index, value) {
                    total = total + eval(Number($(this).text()));
                }
            );
             $(".total").text(total);
                     
            });
            
            function valort(cant,valor,sp){
                 
                 total = cant*valor;
                 $("."+sp).text(total);
                 
                 totalf=0;
                 $(".vt").each(
                function(index, value) {
                    totalf = totalf + eval(Number($(this).text()));
                }
            );
             $(".total").text(totalf);
                 
                 
            };
            
            
            
            
            
        </script>  
        <script src="./js/chosen/chosen.jquery.js" type="text/javascript"></script>
        <script src="./js/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
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
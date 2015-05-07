<?php /* Smarty version Smarty-3.0.9, created on 2015-05-07 14:06:20
         compiled from "C:/wamp/www/diskitos/templates\generarfactura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12908554b715c3b7577-05073683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec8d670f986095ffac05111879c6beec0e21b72' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\generarfactura.tpl',
      1 => 1431007569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12908554b715c3b7577-05073683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="./js/chosen/docsupport/prism.css">
<link rel="stylesheet" href="./js/chosen/chosen.css">
<style type="text/css" media="all">
/* fix rtl for demo */
.chosen-rtl .chosen-drop { left: -9000px; }
</style>

<div id="content">
    <div class="row">
       <img src="./images/Admin/d2.jpg" />
    </div>
       
    <hr>
   
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
generarfactura.php?option=generar" method="POST">
        <div class="row">
            <div class="col-md-3">
                <b>Nombre:</b>
            </div>
            
            <div class="col-md-4">
                <div class="side-by-side clearfix">
                    <select data-placeholder="Seleccione un cliente..." class="chosen-select" style="width:350px;" tabindex="2">
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
        <br>
        
        <div class="row">            
            <div class="col-md-3">
                <b>Agregar Edición:</b>
            </div>
            
            <div class="col-md-5">
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

            <div class="col-md-1 ">
                <button type="button" id="agregar" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon-plus-sign"></i></button>
            </div>
                                        
        </div>
        <br>                                
        <div class="row">
            <div id="factura">
            <table  id="tabla" class="table table-striped">
                <tr>
                <th>Código de barras</th>
                <th>Edición</th>
                <th>Unidades disponibles</th>
                <th>Unidades</th>
                <th>Valor U</th>
                <th>Valor T</th>
                <th></th>
                </tr>
                
            </table>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <button type="submit button" class="btn btn-primary">Generar</button>
            </div>
            <div class="col-md-5 col-md-offset-3">
                <div class="col-md-5">
                         <b>Total:  </b>
                </div>
                <div class="col-md-5 col-md-offset-2" >
                        <spam class="total">0</spam>
                </div>
              
            
                
            </div>
        </div>
              
                                        
           </form>
       
                
</div>
            
                                        
                                        
      
    
  
    
 
 
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
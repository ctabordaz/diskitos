<?php /* Smarty version Smarty-3.0.9, created on 2015-04-29 18:31:36
         compiled from "C:/xampp/htdocs/diskitos/templates\actualizarcantidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58615541076892e534-44098508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eeabb8c825869f0d9f8011edbf3aeaee5274a6e' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\actualizarcantidad.tpl',
      1 => 1429916466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58615541076892e534-44098508',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<div id="content">
		  <div class="row">
                        <img class="img" src="./images/Admin/d.jpg" />
                  </div>
            
            <hr />
        <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
actualizarcantidad.php?option=actualizar" method="post" enctype="multipart/form-data">
        <div class="row">
           
            <div class="col-md-4">
                <div class="col-md-5">
                    <p id="formato">Edición:</p>
                </div>
                <div class="col-md-7">
            
		<div class="side-by-side clearfix">
		
				<select data-placeholder="Seleccione una edición..." class="chosen-select" style="width:350px;" tabindex="2">
                                         <option value=""></option>
                                        <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edicion')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                                            <option value="<?php echo $_smarty_tpl->getVariable('e')->value->get('codigo_de_barras');?>
"><?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['titulo'];?>
-<?php echo $_smarty_tpl->getVariable('e')->value->get('formato');?>
</option>
                                        <?php }} ?>
					
				</select>
			
		</div>

                                        
             </select>
                </div>
            </div>
            
        </div>
        <div class="row">
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edicion')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
?>
                    <div id='<?php echo $_smarty_tpl->getVariable('e')->value->get('codigo_de_barras');?>
'><br>
                        <img  class="caratula" src="<?php echo $_smarty_tpl->getVariable('e')->value->auxiliars['caratula'];?>
"  />
                    
                    </div>  
                <?php }} ?>

        </div>          

        <hr />

        

        <hr />

        <div class="row">
            <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Ingresar 
            </button>
        </div>
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
    </form>
                
                
</div>
		
                
		

		

		

		

		

	
	

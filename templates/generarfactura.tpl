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
   
    <form action="{$gvar.l_global}generarfactura.php?option=generar" method="POST">
        <div class="row">
            <div class="col-md-3">
                <b>Nombre:</b>
            </div>
            
            <div class="col-md-4">
                <div class="side-by-side clearfix">
                    <select data-placeholder="Seleccione un cliente..." class="chosen-select" style="width:350px;" tabindex="2">
                                         <option value=""></option>
                                        {foreach $clientes as $e}
                                            <option value="{$e->get('cedula')}">{$e->get('cedula')}-{$e->get('nombre')}</option>
                                        {/foreach}
					
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
                                         {assign var="j" value=0}
                                        {section name=i loop=$edicion}
                                            <option value="{$j}">{$edicion[i]->auxiliars['titulo']}-{$edicion[i]->get('formato')}</option>
                                             {assign var="j" value=$j+1}
                                        {/section}
					
				</select>
			
		</div>
            </div>

            <div class="col-md-1 ">
                <button type="button" id="agregar" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon-plus-sign"></i></button>
            </div>
                                        
        </div>
        <br>                                
        <div class="row">
            <table  id="tabla" class="table table-striped">
                <tr>
                <th>Código de barras</th>
                <th>Edición</th>
                <th>Unidades disponibles</th>
                <th>Unidades</th>
                <th>Valor U</th>
                <th>Valor T</th>
                </tr>
                
            </table>
            
        </div>
              
                                        
                
                
</div>
            
                                        
                                        
      
    </form>
    
    
    
    
    
       

</div>
<script type="text/javascript">
    $("#agregar").click(function(){
        
        var arr =  {$edicion->auxiliars};
        
        
      
 

        
        {literal}   $("#tabla tr:last").after("<tr><td>{/literal}{$edicion[1]->get('codigo_de_barras')}{literal}</td></tr>"); {/literal}
    
    });
    
    
    
    
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
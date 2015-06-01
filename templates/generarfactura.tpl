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
                <h5><b>Nombre:</b></h5>
            </div>
            
            <div class="col-md-4">
                <div class="side-by-side clearfix">
                    <select name="cliente" data-placeholder="Seleccione un cliente..." class="chosen-select" style="width:350px;" tabindex="2">
                                         <option value=""></option>
                                        {foreach $clientes as $e}
                                            <option value="{$e->get('cedula')}">{$e->get('cedula')} - {$e->get('nombre')}</option>
                                        {/foreach}
					
                    </select>
                </div>
            </div>                 
        </div>
        <br>
        
        <div class="row">            
            <div class="col-md-3">
                <h5><b>Agregar Edición:</b></h5>
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
        {foreach $edicion as $e}
                var edicion = new Object();
                edicion.cod = {$e->get('codigo_de_barras')};
                edicion.cantidad = {$e->get('cantidad')};
                edicion.precio = {$e->get('precio')};
                edicion.titulo = "{$e->auxiliars['titulo']}-{$e->get('formato')}";
                ediciones.push(edicion);
        {/foreach}
    
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
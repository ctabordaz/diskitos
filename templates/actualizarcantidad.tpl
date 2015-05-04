
  <link rel="stylesheet" href="./js/chosen/docsupport/prism.css">
  <link rel="stylesheet" href="./js/chosen/chosen.css">
  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>
	<div id="content">
		  <div class="row">
                        <img class="img" src="./images/Admin/d.jpg" />
                  </div>
            
            <hr />
        <form action="{$gvar.l_global}actualizarcantidad.php?option=actualizar" method="post" enctype="multipart/form-data">
        <div class="row">
           
            <div class="col-md-4">
                <div class="col-md-5">
                    <p id="formato">Edición:</p>
                </div>
                <div class="col-md-7">
            
		<div class="side-by-side clearfix">
		
				<select data-placeholder="Seleccione una edición..." class="chosen-select" style="width:350px;" tabindex="2">
                                         <option value=""></option>
                                        {foreach $edicion as $e}
                                            <option value="{$e->get('codigo_de_barras')}">{$e->auxiliars['titulo']}-{$e->get('formato')}</option>
                                        {/foreach}
					
				</select>
			
		</div>

                                        
             </select>
                </div>
            </div>
            
        </div>
        <div class="row">
                {foreach $edicion as $e}
                    <div id='{$e->get('codigo_de_barras')}'><br>
                        <img  class="caratula" src="{$e->auxiliars['caratula']}"  />
                    
                    </div>  
                {/foreach}

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
		
                
		

		

		

		

		

	
	

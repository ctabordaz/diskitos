
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
		
				<select data-placeholder="Choose a madafaka..." class="chzn-select" style="width:350px;" tabindex="2">
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
    </form>
                
                
</div>
		
                
		

		

		

		

		

	
	

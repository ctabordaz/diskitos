<br><br><br><br><br><br>

<form action="{$gvar.l_global}realizarpedido.php?option=enviar" method="post">
    <div class="alert alert-info col-md-offset-4 col-md-4">
        <div class="row">
            <br>
            <h4 id="resumen">Resumen de pedido</h4>
        </div>
        <div class="row">
            <h5 id="resumen">---------------------------------------------------------------</h5>
            <h5 id="resumen">Items</h5>
        </div>
        <div class="col-md-offset-1 col-md-9">
            {$total = 0}
            {$prov = "x_x"}

            <ol>        
                {section loop=$ediciones name=i}
                    {$ed = $ediciones[i]->get('auxiliars')}

                    <li>{$ed['titulo']} - {$ed['interprete']} | {$cantidades[i]} unidades ........... ${$ediciones[i]->get('precio')*0.8*$cantidades[i]}</li>

                    {$total = $total + $ediciones[i]->get('precio')*0.8*$cantidades[i]}
                    
                    {if $prov eq "x_x"}
                        {$prov = $proveedores[i]}
                    {else}
                        {$prov = "{$prov} - {$proveedores[i]}"}
                    {/if}
                {/section}
            </ol>
        </div>

            <br><br><br><br>

        <div class="row">
            <h5 id="resumen">---------------------------------------------------------------</h5>
            <h5 id="resumen">Total</h5>
        </div>
        <div class="col-md-offset-1 col-md-9">
            <ul>
                <li>${$total}</li>
            </ul>
        </div>
           
            <br>
            
        <div class="row">
            <h5 id="resumen">---------------------------------------------------------------</h5>
        </div>
            
            <br>
            
        <div class="col-md-offset-4 col-md-5">
            <input type="hidden" name="precio" value="{$total}">
            <input type="hidden" name="proveedor" value="{$prov}">
            <input type="submit" value="Realizar Pedido" class="btn btn-primary btn-block btn-small botonPedir" tabindex="5">
        </div>
            <br><br><br><br>
    </div> 
</form>

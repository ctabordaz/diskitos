<div class="container">
        <header class="codrops-header">
                <h1>Relizar Pedido <span>Solicite los albumes a sus proveedores</span></h1>
        </header>
        <section class="content">
                <div class="dummy-browser">
                    <div class="dummy-header">
                        <p>Ediciones</p>
                    </div>
                    <form action="{$gvar.l_global}realizarpedido.php?option=pedir" method="post">
                        <div class="dummy-grid dummy-grid--filled">
                            
                            {foreach from=$ediciones item=edicion}
                                {$ed = $edicion->get('auxiliars')}

                                <div class="dummy-grid__item">
                                    <img src="{$ed['caratula']}" /><br>
                                    <p id='det'>{$ed['titulo']} - {$ed['interprete']}</p>
                                    <p id='detalle'>Formato: {$edicion->get('formato')} - Precio: {$edicion->get('precio') * 0.8}</p>
                                    <p id='detalle'>Cantidad a Pedir: <input type="number" name="cantidad-{$edicion->get('codigo_de_barras')}" min="1"> </p>
                                </div>

                            {/foreach}
                            
                        </div><!-- /dummy-grid -->
                        <div class="col-md-offset-5 col-md-2">
                            <input type="submit" value="Realizar Pedido" class="btn btn-primary btn-block btn-small botonPedir" tabindex="5">
                        </div>
                    </form>
                    <br><br><br>
                </div>
        </section> 
</div><!-- /container -->
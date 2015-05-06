<body {if isset($cargar2)}onload="{$cargar2}"{/if}>
    <br><br><br><br>
    <div id="content">
        <div class="container">  
            <br><br>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-1">
                    <form action="{$gvar.l_global}registrarcajero.php?option=registrar" method="post">
                        <h2>Registrar Cajero <small>Por favor complete todos los campos.</small></h2>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nombre" id="nombre" class="form-control input-lg" placeholder="Nombre" tabindex="3" required />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="1" required />
                                </div>
                            </div>                        
                        </div>                
                        <div class="form-group">
                            <input type="email" name="correo" id="correo" class="form-control input-lg" placeholder="Correo electrónico" tabindex="4" required />
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="contraseña" id="contraseña" class="form-control input-lg" placeholder="Contraseña" tabindex="5" required />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="salario" id="salario" min="0" class="form-control input-lg" placeholder="Salario" tabindex="6" required />
                                    <input type="hidden" name="tipo" id="tipo" />
                                    <input type="hidden" name="cedula" id="cedula" value="{$ide}"/>
                                </div>
                            </div>
                        </div>

                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr />
        <br>
    </div>
</body>
<body {if isset($cargar)}onload="{$cargar}"{/if}>            
    <div class="container">    
        <br><br><br><br>    
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 


            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="panel-title text-center">Buscar Edición:</div>
                </div>     

                <div class="panel-body" >

                    <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" action="{$gvar.l_global}buscarediciones.php?option=consultar" method="POST">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-text-size"></i></span>
                            <input id="palabra" type="text" class="form-control" name="palabra" value="" placeholder="Titulo, Autor o Cancion" required>                                        
                        </div>                                                               

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <input type="submit" class="btn btn-primary pull-right" value="Buscar" name="Buscar">                         
                            </div>
                        </div>

                    </form>     

                </div>                     
            </div>  
        </div>
    </div>
</body>
 
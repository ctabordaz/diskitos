<html>
    <header>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/ingresarediciones.css" >
        <!-- <link rel="stylesheet" href="./css/bootstrap.css" >-->
    </header>
    <body>
    <div class="container">
        <div class="row" col-sm-offset-6>
            <!-- A --> <br><br><br>
            <h1>Resultados de la Busqueda</h1><br><br>
        </div>
        {foreach $resulconsul as $rc}
            <form action="{$gvar.l_global}buscarediciones.php?option=cancionero" method="post">
        <div class="row" id='{$rc->codigo_de_barras}'>
            <div class="col-sm-3">
                <!-- B -->
                <a href="{$gvar.l_global}buscarediciones.php?option=cancionero&album={$rc->album}" onclick="javascript:void window.open('{$gvar.l_global}buscarediciones.php?option=cancionero&album={$rc->album}','1433123817331','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Canciones</a>
                <img  class="caratula" src="{$rc->caratula}" alt="todo murio" />
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="row">
                            <!-- C -->
                            <h4>Titulo: {$rc->titulo}</h4>
                        </div> 
                        <div class="row">
                            <!-- D -->
                            <h5>Año: {$rc->ano_publicacion}<h5> <br>   
                            <h5>Formato: {$rc->formato}</h5>
                        </div> 
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="row">
                            <!-- E -->
                            <h5>Artista: {$rc->interprete}</h5>
                        </div> 
                        <div class="row">
                            <!-- F -->
                            <h5>Cantidad: {$rc->cantidad}</h5>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
                        <br>
            </form>
        {/foreach}
    </div>
    
    </body>
</html>
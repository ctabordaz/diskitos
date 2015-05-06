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
    <div class="row" id='{$rc->codigo_de_barras}'>
        <div class="col-sm-3">
            <!-- B -->
            <input name="{$rc->codigo_de_barras}" type="checkbox" id="{$rc->codigo_de_barras}" value="{$rc->codigo_de_barras}" disabled/>
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
    {/foreach}
</div>
<input type="submit" value="Enviar" disabled align="center">
</body>
</html>
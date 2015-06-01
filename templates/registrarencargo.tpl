<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar Encargo</title>
        
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <link rel="shortcut icon" href="{$gvar.l_global}disk.ico" />
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="./js/chosen/docsupport/prism.css">
        <link rel="stylesheet" href="./js/chosen/chosen.css">
        
    </head>
    <body>
        
        <ul class="nav nav-tabs cabeza navbar-fixed-top">
            <li role="presentation"  ><a class="c" href="iniciarsesion.php">Regresar a Menú</a></li>
            <li role="presentation" class=" active navbar-right"><a class="bl"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>Cajero</a></li>
        </ul>
        
        <div id="content">
            <div class="row">
                <img src="./images/Admin/d2.jpg" />
            </div>

            <hr />
            <form action="{$gvar.l_global}registrarencargo.php?option=registrar" method="post" enctype="multipart/form-data">
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Cliente:</label>
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
                <hr />

                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <h4 id="caratula1">Álbum</h4>
                            <div class="col-md-4">
                                <p>Título:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input type="text" name="titulo" id="titulo" required />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <p>Género:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input  type="text" name="genero" id="genero" required/>
                            </div>
                        </div>

                        <div class="row">
                            <h4 id="caratula1">Formato</h4>
                            <div class="col-md-5">
                                <select class="form-control" name="formato" type="text" id="formatot" placeholder="Formato">
                                    <option value ="cd">CD</option>
                                    <option value ="dvd">DVD</option>
                                    <option value ="lp">LP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <br>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Intérprete:</p>
                            </div>
                            <div class="col-md-8 required">
                                <input  type="text" name="interprete" id="interprete" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row">
                    <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Registrar 
                    </button>
                </div>
            </form>
        </div>
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./js/alertifyjs/alertify.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="./js/jquery.backstretch.min.js"></script>
        
        <script>
            $.backstretch(["./images/Admin/Tocadiscos2.jpg"]);
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

    </body>
</html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Cantidad</title>
        
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <link rel="shortcut icon" href="{$gvar.l_global}disk.ico" />
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/ingresarediciones.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="./js/chosen/docsupport/prism.css">
        <link rel="stylesheet" href="./js/chosen/chosen.css">
        <script type="text/javascript" src="js/sc.js"></script>
        
    </head>
    <body {if isset($cargar)}onload="{$cargar}"{/if}>
        
        <div id="content">
            <div class="row">
                <img src="./images/Admin/d2.jpg" />
            </div>

            <hr />
            <form action="{$gvar.l_global}actualizarcantidad.php?option=actualizar" method="post" enctype="multipart/form-data">
                
                <div class="row">
                    <div class="col-md-2">
                        <h4>Edición:</h4>
                    </div>
                    
                    <div class="col-md-4">
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
                </div>

                <hr />

                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <img  class="caratula" id="caratula" />
                    </div>
                    <div class="col-md-4">
                      <table>
                        <tr>
                          <td>
                              <br>
                              <label id="lblTitulo"></label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label id="lblInterprete">Intérprete: </label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label id="lblAnno">Año: </label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label id="lblFormato">Formato: </label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label id="lblCantidad">Cantidad: </label>
                        
                              <input type="hidden" id="codigo_de_barras" name="codigo_de_barras">
                              <input type="hidden" id="album" name="album">
                          </td>
                        </tr>
                      </table>
                    </div>
                </div>

                <hr />
                <!-- Input text actualizar cantidad-->
                <div class="row">
                    <div class="col-md-3">
                        <h4>Cantidad a aumentar:</h4>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="number" class="form-control input-md chat-input" id="cantidad_aumentar" name="cantidad">
                    </div>          
                </div>

                <hr />

                <div class="row">
                    <button id="ingresar" type="submit" class="btn  btn-sm btn-login">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Actualizar 
                    </button>
                </div>
            </form>
        </div>
        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./js/alertifyjs/alertify.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="./js/jquery.backstretch.min.js"></script>
        <script src="./js/chosen/chosen.jquery.js" type="text/javascript"></script>
        <script src="./js/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
          
        </script> 
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
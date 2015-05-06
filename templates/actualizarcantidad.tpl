<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/jquery.ui.css"/>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/ingresarediciones.css" />
  <script type="text/javascript" src="js/jquery.1.7.1.js"></script>
  <script type="text/javascript" src="js/jquery.ui.1.8.16.js"></script>
  <script type="text/javascript" src="js/sc.js"></script>
  <link rel="shortcut icon" href="{$gvar.l_global}disk.ico" />
</head>
<body>

  <div id="content">
              
      <div class="row">
          <img src="./images/Admin/d2.jpg" />
      </div>

      <hr />
      <form action="{$gvar.l_global}actualizarcantidad.php?option=actualizar" method="post" enctype="multipart/form-data">
          <div class="row">
             
              <div class="col-md-4">
                  <div class="row">
                      <div class="col-md-8">
                          <h4>Ingresar Edición:</h4>
                      </div>
                      <div class="col-md-8">
                          <div class="input_container">
                              <input type="text" id="txtEdicion" class="form-control input-md chat-input"/>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>

          <hr />

          <div class="row">
            <table>
              <tr>
                <td>
                  <div class="col-md-8">
                    <img  class="caratula" id="caratula" />
                  </div>
                </td>
                <td>
                  <div class="col-md-8">
                    <div class="row">
                      <label id="lblTitulo">Título: </label>
                    </div>
                    <div class="row">
                      <label id="lblInterprete">Intérprete: </label>
                    </div>
                    <div class="row">
                      <label id="lblAnno">Año: </label>
                    </div>
                    <div class="row">
                      <label id="lblFormato">Formato: </label>
                    </div>
                    <div class="row">
                      <label id="lblCantidad">Cantidad: </label>
                    </div>
                    <input type="hidden" id="codigo_de_barras" name="codigo_de_barras">
                    <input type="hidden" id="album" name="album">
                  </div>
                </td>
              </tr>
            </table>
          </div>

          

          <hr />
            <!-- Input text actualizar cantidad-->
            <table>
              <tr>
                <td>
                  <label>Cantidad a aumentar: </label>
                </td>
                <td>
                  <input type="number" id="cantidad_aumentar" name="cantidad">
                </td>
              </tr>
            </table>
          <hr />

          <div class="row">
              <button id="actualizar" type="submit" class="btn  btn-sm btn-login">
                  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Actualizar
              </button>
          </div>
      </form>
  </div>

</body>
</html>
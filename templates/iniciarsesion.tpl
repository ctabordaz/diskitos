<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio Sesion</title>
        
        <script src="./js/diskitos2.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./js/alertifyjs/alertify.min.js"></script>
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/resetLogin.css">
        <link rel="stylesheet" href="./css/supersizedLogin.css">
        <link rel="stylesheet" href="./css/styleLogin.css">
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        
        <link rel="stylesheet"  href="./css/diskitos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body {if isset($cargar)}onload="{$cargar}"{/if}>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-4 ">
             
                    <form class="form-login " action="{$gvar.l_global}iniciarsesion.php" method="post">
                        <h4 class="machete">Bienvenido a Diskitos S.A</h4>
                        <input type="text" name="cedula" id="cedula" class="form-control input-sm chat-input" placeholder="Identificación" value="{$id}" required/></br>
                        <input type="password" name="contraseña" id="contraseña" class="form-control input-sm chat-input"value="" placeholder="Contraseña" required/>
                        <input type="hidden" name="option" value="login"/></br>
                        
                        <div class="wrapper">
                            <button type="submit" class="btn  btn-sm btn-login">
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Ingresar 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="./js/supersized.3.2.7.min.js"></script>
        <script src="./js/supersized-init.js"></script>
        <script src="./js/scripts.js"></script>
    
    </body>
</html>

        
    
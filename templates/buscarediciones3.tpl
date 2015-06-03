<html>
    <header>
        <meta charset="UTF-8">
            <title>{$title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link rel="stylesheet" href="./js/alertifyjs/css/alertify.min.css"/>
        <link rel="stylesheet" href="./js/alertifyjs/css/themes/default.min.css"/>
        <link rel="shortcut icon" href="{$gvar.l_global}disk.ico" />
        <link rel="stylesheet"  href="./css/bootstrap.min.css">
        <link rel="stylesheet"  href="./css/buscarediciones.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </header>
    <body>
        <table class="table table-hover">
            <tr>
                <th>Nombre Canción</th>
                <th>Duración</th>
            </tr>
            
            {foreach $lascanciones as $lc}
                <tr>
                    <td>{$lc->nombre}</td>
                    <td>{$lc->duracion}</td>
                </tr>
            {/foreach}
        </table>

    </body>
</html>
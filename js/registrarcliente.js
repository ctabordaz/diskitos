function yaExiste(c){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Ya existe un cliente con la cedula = " + c,60);
}

function faltante(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Debe ingresar una Cedula",60);
}

function noNumerico(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La Cedula debe ser numerica",60);    
}

function faltantes_C(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("No se completaron todos los campos",60);
}

function noNumerico_C(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("El campo Telefono debe ser numérico",60);    
}

function formatoInvalido(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("El correo debe ser como: ejemplo@servidor.extension",60);    
}
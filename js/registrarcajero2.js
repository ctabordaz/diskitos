function yaExiste(c){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Ya existe un empleado con la cedula = " + c,60);
}

function faltante(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Debe ingresar una Cedula",60);
}

function noNumerico(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La Cedula debe ser numerica",60);    
}

function faltantes_E(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("No se completaron todos los campos",60);
}

function noNumericos_E(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Los campos: Telefono y Salario deben ser numéricos",60);    
}

function formatoInvalido(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("El correo debe ser como: ejemplo@servidor.extension",60);    
}
function camposVacios(c){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Debe ingresar una Edicion",60);
}

function cantidadNegativa(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Cantidad debe ser mayor o igual a cero",60);
}

function exitoso(){
        alertify.set('notifier','position', 'top-right');
        alertify.success("La Cantidad ha sido actualizada Correctamente",60);    
}
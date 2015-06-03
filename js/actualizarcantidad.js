function camposVacios(c){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Existen campos obligatorios vacíos!",60);
}

function cantidadNegativa(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La cantidad a aumentar debe ser mayor o igual a cero",60);
}

function exitoso(){
        alertify.set('notifier','position', 'top-right');
        alertify.success("La cantidad ha sido actualizada correctamente!",60);    
}

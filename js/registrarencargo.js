function camposVacios(c){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Existen campos obligatorios vacíos!",60);
}

function exitoso(){
        alertify.set('notifier','position', 'top-right');
        alertify.success("El encargo se ha registrado correctamente!",60);    
}

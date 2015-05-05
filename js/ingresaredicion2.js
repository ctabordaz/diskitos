function faltanteEA(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("No se ha completado todos los campos",60);    
}

function faltantePC(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("El Album debe tener al menos una cancion",60);    
}

function faltanteRC(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Se deben completar los datos de todas las canciones agregadas",60);    
}
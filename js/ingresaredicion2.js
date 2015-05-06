function AlbumDB(nc){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Ya existe un album con número de catalogo = " + nc,60);
}

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

function numericosEA(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("Los campos: Cantidad, Precio, Nro de Catalogo y Año de publicacion, deben ser numéricos",60);    
}

function numericosC(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La duración de las canciones debe ser numérica",60);    
}

function exitoso(){
        alertify.set('notifier','position', 'top-right');
        alertify.success("La Edición ha sido ingresada Correctamente",60);    
}
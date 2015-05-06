function incompletos(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("No hay datos suficientes para realizar la consulta",60);
}
function nodatos(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La consulta realizada no retorna ningun valor",60);
}
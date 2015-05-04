
var managerScreen = managerScreen || {};
managerScreen = {    
   
    faltantes: function(){
            alertify.set('notifier','position', 'top-right');
            alertify.error("No se ha completado todos los campos",60);    
    }
};

var ms = managerScreen;
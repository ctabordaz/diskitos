
var managerScreen = managerScreen || {};
managerScreen = {
    
   
    incompletos: function(){
            alertify.set('notifier','position', 'top-right');
            alertify.error("Identificación o Contraseña incompletos",60);    
    },
    incorrectos: function(){
           alertify.set('notifier','position', 'top-right');
           alertify.error("Identificacion o Contraseña incorrectos",60);    
    }
};

var ms = managerScreen;


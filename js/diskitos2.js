
var managerScreen = managerScreen || {};
managerScreen = {
    
    cargardon: function(){
        var id=document.getElementById("cedula").value;
        var pass=document.getElementById("contraseña").value;
        
        if(id.length !== 0){
            alert("Identificación o contraseña son incorrectas ");
        }
    },
      cargar: function(){
        


  $('#basicModal').modal('show');
    
    }
};

var ms = managerScreen;


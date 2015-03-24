
var managerScreen = managerScreen || {};
managerScreen = {
    cargar: function(){
        var id=document.getElementById("cedula").value;
        var pass=document.getElementById("contraseña").value;
        if(id.length !== 0){
            if(pass.legth === 0){
                alert("Identificación o contraseña invalidas");
            }
        }
    }
  
    
};

var ms = managerScreen;


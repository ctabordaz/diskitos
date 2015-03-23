/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var managerScreen = managerScreen || {};
managerScreen = {
    validar : function(){
        var id = document.getElementById("identificacion").value;
        var pass = document.getElementById("contraseña").value;
        if(id.length === 0 && pass.length === 0){
            alert("Identificación y contraseña vacias");
        }else{
             if(id.length === 0){
            alert("Identificación vacia");
              }
        if(pass.length === 0){
            alert("Contraseña vacia");
        }
        }
    }
    
};

var ms = managerScreen;
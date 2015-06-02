/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var n = 2;


var managerScreen = managerScreen || {};
managerScreen = {
    agregar: function(){
        
        $("<div>",{
            id : "cancion" + n
        }).append(
        $("<div>",{
            class: "sings"
        }).append(
                $("<div>",{
            class: "row"
        }).append($("<div>",{
            class: "col-md-2"
        }).append($("<p>Nombre: </p>")),
        $("<div>",{
            class: "col-md-10 required"
        }).append($("<input>",{
            name: "ncancion" + n,
            id: "ncancion" + n ,
            type: "text",
            required: "true"
        }))), $("<div>",{
            class: "row"
        }).append($("<div>",{
            class: "col-md-2"
        }).append($("<p>Compositor: </p>")),
        $("<div>",{
            class: "col-md-10 required"
        }).append($("<input>",{
            name: "ccancion" + n,
            id: "ccancion" + n ,
            type: "text",
            required: "true"
        }))),$("<div>",{
            class: "row"
        }).append($("<div>",{
            class: " col-md-1"
        }).append($("<p>Duración: </p>")),
        $("<div>",{
            class: "col-md-offset-1 col-md-3 required2"
        }).append($("<input>", {
            name: "duraciona" + n,
            id: "duraciona" + n ,
            min: "0",
            max: "10",
            class: "duracion",
            type: "number",
            required: "true"
        }).append($("<p>:</p>"))),
        $("<div>",{
            class: "col-md-5 required"
        }).append($("<input>",{
            name: "duracionb" + n,
            id: "duracionb" + n ,
            min: "0",
            max: "59",
            class: "duracion",
            type: "number",
            required: "true"
        })))
        
                )).appendTo("#cancion");
        
        $("#nca").val(n);
        n = n+1;
       
       
    },
    eliminar: function(){
       if(n>1){
        n = n-1;
        cancion = "#cancion"+n;
        $(cancion).remove();
        if(n===1){
            n = 2;
        }
       }
    },
    cliente: function(){
        alertify.set('notifier','position', 'top-right');
        alertify.error("El cliente no existe",60);
        
        
        
    },
    edicionN: function(n){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La edicion " + n + " no existe",60);
        
        
        
    },
    edicionC: function(n, v){
        alertify.set('notifier','position', 'top-right');
        alertify.error("La edicion " + n + " no puede tener " + v +" cantidades",60);
     
    },
    generado: function(){
         alertify.set('notifier','position', 'top-right');
        alertify.success("Factura generada correctamente",60);
        
        
    }
    
   
};

var ms = managerScreen;
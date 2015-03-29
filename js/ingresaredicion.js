/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



var managerScreen = managerScreen || {};
managerScreen = {
    agregar: function(){
        $("<div>",{
            class: "row"
        }).append($("<div>",{
            class: "col-md-2"
        }).append($("<p>Nombre: </p>")),
        $("<div>",{
            class: "col-md-2"
        }).append($("<input>",{
            type: "text",
            required: "true"
        }))).appendTo("#cancion");
        
        $("<div>",{
            class: "row"
        }).append($("<div>",{
            class: "col-md-2"
        }).append($("<p>Compositor: </p>")),
        $("<div>",{
            class: "col-md-2"
        }).append($("<input>",{
            type: "text",
            required: "true"
        }))).appendTo("#cancion");
        
        $("<div>",{
            class: "row"
        }).append($("<div>",{
            class: " col-md-1"
        }).append($("<p>Duración: </p>")),
        $("<div>",{
            class: "col-md-offset-1 col-md-2"
        }).append($("<input>", {
            class: "duracion",
            type: "text",
            required: "true"
        }).append($("<p>:</p>"))),
        $("<div>",{
            class: "col-md-2"
        }).append($("<input>",{
            class: "duracion",
            type: "text",
            required: "true"
        }))).appendTo("#cancion");
    }
  
    
};

var ms = managerScreen;


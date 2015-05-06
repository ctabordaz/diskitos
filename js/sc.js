// esta rutina se ejecuta cuando jquery esta listo para trabajar
$(function() 
{
	$("#txtEdicion").autocomplete({
		source: "actCant_refresh.php", 				/* este es el formulario que realiza la busqueda */
		minLength: 1,									/* le decimos que espere hasta que haya 1 caracteres escritos */
		select: edicionSeleccionada,	/* esta es la rutina que extrae la informacion del registro seleccionado */
		focus: edicionMarcada
	});
});

function edicionMarcada(event, ui)
{
	var edicion = ui.item.value;
	$("#txtEdicion").val(edicion.titulo+"-"+edicion.formato);
	event.preventDefault();
}

function edicionSeleccionada(event, ui)
{
	var edicion = ui.item.value;
	//var cantidad = $("#txtCantidad").val();
	
	// vamos a validar la cantidad con un procedimiento muy simple
	//cantidad = parseInt(cantidad, 10); // convierte este valor en un entero base 10 (un numero cualquiera)
	//if (isNaN(cantidad)) cantidad = 0;
	
	$("#lblTitulo").text("Título: "+edicion.titulo);
	$("#lblInterprete").text("Intérprete: "+edicion.interprete);
	$("#lblAnno").text("Año: "+edicion.ano_publicacion);
	$("#lblFormato").text("Formato: "+edicion.formato);
	$("#lblCantidad").text("Cantidad: "+edicion.cantidad);
	//$("caratula").src(edicion.caratula);
	//document.getElementById("caratula").src = "./images/caratulas/35047.jpg";

	document.getElementById("caratula").src = edicion.caratula;
	//document.getElementById("codigo_de_barras").value = edicion.codigo_de_barras;
	//document.getElementById("album").value = edicion.album;
	$("#codigo_de_barras").val(edicion.codigo_de_barras);
	$("#album").val(edicion.album);

	$("#txtEdicion").val(edicion.titulo+"-"+edicion.formato);
	event.preventDefault();
}
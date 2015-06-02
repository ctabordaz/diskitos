// esta rutina se ejecuta cuando jquery esta listo para trabajar
$(function() 
{
	var ediciones = [];
	/*{foreach $edicion as $e}
	      var edicion = new Object();
	      edicion.caratula = {$e->auxiliars['caratula']};
	      edicion.titulo = {$e->auxiliars['titulo']};
	      edicion.interprete = {$e->auxiliars['interprete']};
	      edicion.ano_publicacion = {$e->auxiliars['ano_publicacion']};
	      edicion.formato = {$e->get('formato')};
	      edicion.cantidad = {$e->get('cantidad')};
	      edicion.cod = {$e->get('codigo_de_barras')};
	      edicion.album = {$e->auxiliars['nro_catalogo']};
	      ediciones.push(edicion);
	{/foreach}*/
});

$("#ediciones").chosen().change(function(){
	var n = $("#ediciones option:selected").val();
	$("#lblTitulo").text("Título: ");
	if(n !== ""){
	  $("#lblTitulo").text("Título: "+ediciones[n].titulo);
	  $("#lblInterprete").text("Intérprete: "+ediciones[n].interprete);
	  $("#lblAnno").text("Año: "+ediciones[n].ano_publicacion);
	  $("#lblFormato").text("Formato: "+ediciones[n].formato);
	  $("#lblCantidad").text("Cantidad: "+ediciones[n].cantidad);

	  document.getElementById("caratula").src = ediciones[n].caratula;

	  $("#codigo_de_barras").val(ediciones[n].cod);
	  $("#album").val(ediciones[n].album);
	}
});
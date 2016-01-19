$(document).ready(function(){

	$('.collapsible').collapsible();
	$('.slider').slider({
		full_width:true
	});

	$('.materialboxed').materialbox();
});


function Nueva()
{
	var TituloAfuera = document.getElementById("TituloAfuera");
	var TituloAdentro = document.getElementById("TituloAdentro");
	var Texto = document.getElementById("texto");

	document.getElementById("a").firstChild.nodeValue = TituloAfuera.value;	
	document.getElementById("b").firstChild.nodeValue = TituloAdentro.value;	
	document.getElementById("c").firstChild.nodeValue = Texto.value;
}

$(document).ready(function() {
    $('select').material_select();
});
$(document).ready(function() {

	var pass1 = $('[name=pass]');
	var pass2 = $('[name=passc]');
	var confirmacion = "Las contraseñas si coinciden";
	var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
	var negacion = "No coinciden las contraseñas";
	var vacio = "La contraseña no puede estar vacía";

	var ctn = $('#msgp');
	
        ctn.hide();
        
	function coincidePassword(){
	var valor1 = pass1.val();
	var valor2 = pass2.val();

	ctn.show();

	if(valor1 != valor2){
		
	}
	if(valor1.length==0 || valor1==""){
	span.text(vacio).addClass('negacion');	
	}
	if(valor1.length<6 || valor1.length>10){
	span.text(longitud).addClass('negacion');
	}
	if(valor1.length!=0 && valor1==valor2){
	span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
	}
	}
	//ejecuto la función al soltar la tecla
	pass2.keyup(function(){
	coincidePassword();
	});
});
     

    
    
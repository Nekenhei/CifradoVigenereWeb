function valida(f){
	var ok = true;
	var msg = "Ingrese información en los campos:\n";



	if(document.getElementById("name").value == "" || document.getElementById("name").value == null){
		msg += " - Nombre\n";
		ok = false;
	}

	if(document.getElementById("email").value == "" || document.getElementById("email").value == null){
		msg += " - Correo\n";
		ok = false;
	}

	if(document.getElementById("box").value == "" || document.getElementById("box").value == null){
		msg += " - Texto\n";
		ok = false;
	}

	if(document.getElementById("pass").value == "" || document.getElementById("pass").value == null){
		msg += " - Clave\n";
		ok = false;
	}


	if(ok == false){
		alert(msg);

	}
	return ok;
}

function limpiar(){
	document.getElementById("name").value="";
	document.getElementById("email").value="";
	document.getElementById("box").value="";
	document.getElementById("pass").value="";
	
}

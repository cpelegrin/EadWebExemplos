function validation_name(elemento){
	if(elemento.value.length > 3){
		document.getElementById("msg_erro").innerHTML = "";
	}
	else{
		document.getElementById("msg_erro").innerHTML = "Você precisa digitar ao menos 3 caracteres";
	}
}
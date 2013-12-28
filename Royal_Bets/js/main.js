function validarPassword(){
	if(document.getElementById("password").value != document.getElementById("password2").value){
            document.getElementById('alertapassword').style.display = 'block'
            document.getElementById("password").value = "";
            document.getElementById("password2").value = "";
        }
        if((document.getElementById("password2").value != NULL) && (document.getElementById("password").value != NULL)){
            document.getElementById('alertapassword').style.display = 'none'
        }
}

window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    document.getElementById('alertapassword').style.display = 'none';/* "contenido_a_mostrar" es el nombre de la etiqueta DIV que deseamos mostrar */
}
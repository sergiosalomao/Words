function sortear() {
    var x = Math.floor((Math.random() * 10) + 1);
return x

}
///////////////////////////window.location = 'treino.php';
function mudaFocus(InputId,Evento) {
 
		if(Evento.keyCode == 13){		

            document.getElementById($InputId).focus();
   
    }
}

function focusResposta() {
    
        document.getElementById("resposta").focus();

}
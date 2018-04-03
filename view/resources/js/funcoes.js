function sortear() {
    var x = Math.floor((Math.random() * 10) + 1);
    return x
}
///////////////////////////window.location = 'treino.php';
function mudaFocus(InputId, Evento) {
    if (Evento.keyCode == 13) {
        document.getElementById($InputId).focus();
    }
}

function focusResposta() {
    document.getElementById("resposta").focus();
}

function quebraLinha() {
    texto = document.getElementById("cx-entrada").value;
    letra = texto.split(" "); // Quebra Linha no Espaço
    texto = letra.join("\n");
    document.getElementById("cx-ingles").value = texto;
    totallinhas = contaLinhas('cx-ingles');
}

function contaLinhas(el) {
    var texto = document.getElementById(el).value;
    var n = texto.split('\n').length;
    return n
}
function paraJogo() {
    document.getElementById("statusJogo").value = 'parado';
    document.getElementById("btnIniciar").removeAttribute("disabled");
    document.getElementById("caixa-pergunta").innerText = '';
    document.getElementById("caixa-resposta").value = '';
    document.getElementById("progressBar").setAttribute("style", 'width: 0%');

    clearInterval(cronometroProva);

    preparaJogo();

    window.location = '/words/view/pages/limpaTabelaPrepara.php';
}
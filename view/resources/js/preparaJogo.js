function preparaJogo() {

    //pega status do jogo
    statusJogo = document.getElementById("statusJogo").value;

    if (statusJogo == 'preparar') {
        document.getElementById("palavras-respondidas").innerHTML = '0';
        document.getElementById("respostas-certas").innerHTML = '0';
        document.getElementById("respostas-erradas").innerHTML = '0';
        document.getElementById("tempo-resposta").innerHTML = '0';
        document.getElementById("nivel").innerHTML = '0';
        document.getElementById("exp").innerHTML = '0%';
        document.getElementById("btnParar").setAttribute("disabled", "disabled");
        document.getElementById("btnPause").setAttribute("disabled", "disabled");
        document.getElementById("btnTraduzir").setAttribute("disabled", "disabled");
        document.getElementById("caixa-pergunta").readOnly = true;
        document.getElementById("menu-link-treinar").setAttribute("disabled", "disabled");
        document.getElementById("menu-link-treinar").setAttribute("class", "nav-link disabled");
        document.getElementById("menu-link-treinar").setAttribute("href", "#");
        escreveAutomatico('Clique em iniciar para Começar o Jogo!', 'caixa-pergunta');

    } else if (statusJogo == 'parado') {
        document.getElementById("caixa-resposta").setAttribute("disabled", "disabled");
        document.getElementById("palavras-respondidas").innerHTML = '0';
        document.getElementById("respostas-certas").innerHTML = '0';
        document.getElementById("respostas-erradas").innerHTML = '0';
        document.getElementById("tempo-resposta").innerHTML = '0';
        document.getElementById("nivel").innerHTML = '0';
        document.getElementById("exp").innerHTML = '0';
        document.getElementById("btnParar").setAttribute("disabled", "disabled");
        document.getElementById("btnPause").setAttribute("disabled", "disabled");
        document.getElementById("btnTraduzir").setAttribute("disabled", "disabled");
        document.getElementById("caixa-pergunta").readOnly = true;
        document.getElementById("menu-link-treinar").setAttribute("disabled", "disabled");
        document.getElementById("menu-link-treinar").setAttribute("class", "nav-link disabled");
        document.getElementById("progressBar").setAttribute("style", 'width: 0%');
        escreveAutomatico('Clique em iniciar para Começar o Jogo!', 'caixa-pergunta');


    } else if (statusJogo == 'pause') {
        escreveAutomatico('Pause...');

    } else if (statusJogo == 'iniciado') {
        iniciaJogo();
        document.getElementById("caixa-resposta").removeAttribute("disabled");
        document.getElementById("caixa-resposta").focus();

    } else if (statusJogo == 'gameover') {
        document.getElementById("caixa-resposta").setAttribute("disabled", "disabled");
        document.getElementById("btnParar").setAttribute("disabled", "disabled");
        document.getElementById("btnPause").setAttribute("disabled", "disabled");
        document.getElementById("btnTraduzir").setAttribute("disabled", "disabled");
        document.getElementById("menu-link-treinar").setAttribute("href", "#");
        document.getElementById("caixa-resposta").setAttribute("disabled", "disabled");
        document.getElementById("caixa-pergunta").readOnly = true;
        document.getElementById("menu-link-treinar").setAttribute("disabled", "disabled");
        document.getElementById("menu-link-treinar").setAttribute("class", "nav-link disabled");
        document.getElementById("btnParar").setAttribute("disabled", "disabled");
        escreveAutomatico('GameOver!', 'caixa-pergunta');
    }
}
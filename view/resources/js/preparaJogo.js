function preparaJogo(){
    document.getElementById("caixa-resposta").setAttribute("disabled","disabled");
    document.getElementById("palavras-respondidas").innerHTML = '0';
    document.getElementById("respostas-certas").innerHTML = '0';
    document.getElementById("respostas-erradas").innerHTML = '0';
    document.getElementById("tempo-resposta").innerHTML = '0';
    document.getElementById("btnParar").setAttribute("disabled","disabled");
    document.getElementById("btnPause").setAttribute("disabled","disabled");
    document.getElementById("btnTraduzir").setAttribute("disabled","disabled");
    document.getElementById("caixa-pergunta").readOnly = true;
    document.getElementById("menu-link-treinar").setAttribute("disabled","disabled");
    document.getElementById("menu-link-treinar").setAttribute("class","nav-link disabled");
    
    
}

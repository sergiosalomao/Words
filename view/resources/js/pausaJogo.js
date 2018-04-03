function pausaJogo() {
    document.getElementById("statusJogo").value = 'pause';
  
    if (document.getElementById("btnPause").innerHTML == 'Pause') {
        document.getElementById("btnPause").innerHTML = 'Continue';
        tempoGravado = tempoRestante;
        clearInterval(cronometroProva);
        tempoProva = tempoGravado;
        document.getElementById("caixa-resposta").readOnly = true;
        document.getElementById("caixa-pergunta").focus();
  
    } else if (document.getElementById("btnPause").innerHTML == 'Continue') {
        document.getElementById("btnPause").innerHTML = 'Pause';
        document.getElementById("caixa-resposta").readOnly = false;
        iniciaJogo();
    }
}
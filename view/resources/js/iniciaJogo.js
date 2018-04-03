//definicoes
tempoProva = 30;
tempoRestante = 0;

function iniciaJogo() {
  //pega status do jogo
  statusJogo = document.getElementById("statusJogo").value;

  //se o jogo estiver preparado ou gameover ele chama o prepara a pergunta quando iniciar
  if (statusJogo == 'preparar' | statusJogo == 'gameover') {
    window.location = 'preparaPergunta.php';
  }

  statusJogo = document.getElementById("statusJogo").value = 'iniciado';
  document.getElementById("btnIniciar").setAttribute("disabled", "disabled");
  document.getElementById("btnParar").removeAttribute("disabled");
  document.getElementById("btnPause").removeAttribute("disabled");
  document.getElementById("btnTraduzir").removeAttribute("disabled");
  document.getElementById("caixa-resposta").removeAttribute("disabled");
  document.getElementById("caixa-resposta").focus();

  tempoRestante = tempoProva;

  x = document.getElementById("tempo-resposta");

  cronometroProva = setInterval(

    function () {

      if (tempoRestante == 0) {

        gameOver();

      }
      tempoRestante--;

      x.innerHTML = tempoRestante;

      document.getElementById("tempo").value = '';
      document.getElementById("tempo").value = tempoProva - tempoRestante;

    }, 1000);
}
tempoProva = 10;

function iniciaJogo() {

  
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


    }
      , 1000);
  }
  

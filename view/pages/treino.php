<?php include 'cabecalho.php' ?>
<body onload="preparaJogo()">
        
    
    <div class="container">

    <?php include 'menu.php '?>

    <!-- Conteudo -->
        <div class="row">
        <!-- LADO DIREITO -->    
            <div class="col-sm-9 fundo-branco">
                <br>
                <div id="menuButtons">
                    <button id="btnIniciar" type="button" class="btn btn-info btn-sm" onclick="iniciaJogo()">Iniciar</button>
                    <button id="btnPause" type="button" class="btn btn-info btn-sm" onclick="pausaJogo()">Pause</button>
                    <button id="btnParar" type="button" class="btn btn-danger btn-sm" onclick="paraJogo()">Parar</button>
                    <button id="btnTraduzir" type="button" class="btn btn-info btn-sm" onclick="traduzPalavra()">Traduzir</button>
                    
                    
                </div><br>
   
               
                <div class="form-group">
                    <!-- Pergunta -->
                        <textarea id="caixa-pergunta" class="display-4 estilo-caixa-pergunta" ><?php echo $_GET['pergunta']; ?></textarea>
                </div>  

                <div class="form-group">
                    <!-- Resposta -->
                    <form action="salvaResposta.php">
                        <input id="caixa-resposta" name="resposta" class="display-4 estilo-caixa-resposta">
                        <input id="id" name="id" type="hidden" value="<?php echo $_GET['id']?>">
                    </form>
                </div>
                
                <!--barra de prograsso -->
                <div class="progress">
                    <div id="progressBar" class="progress-bar bg-success estilo-caixa-resposta" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                                

            </div><!-- LADO DIREIRO -->


            <!-- LADO ESQUERDO -->
            <div class="col-sm-3">
                

                <ul class="list-group">
                     <li  class="list-group-item d-flex justify-content-between align-items-center">Tempo para Responder
                        <span id="tempo-resposta" class="badge badge-success badge-pill"></span>
                    </li>
                
                    <li  class="list-group-item d-flex justify-content-between align-items-center">Palavras Respondidas
                        <span id="palavras-respondidas" class="badge badge-primary badge-pill"></span>
                    </li>
                
                    <li class="list-group-item d-flex justify-content-between align-items-center">Respostas Certas
                        <span id="respostas-certas" class="badge badge-warning badge-pill"></span>
                     </li>
                    
                     <li class="list-group-item d-flex justify-content-between align-items-center">Respostas Erradas
                       <span id="respostas-erradas" class="badge badge-danger badge-pill">1</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">Nivel
                       <span class="badge badge-primary badge-pill">1</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">Proximo Nivel
                       <span class="badge badge-primary badge-pill">1</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">Experiencia
                       <span class="badge badge-primary badge-pill">1</span>
                    </li>
                   
                    <li class="list-group-item d-flex justify-content-between align-items-center">total de palavras cadastradas
                       <span class="badge badge-primary badge-pill">1</span>
                    </li>
                </ul>


            </div> <!-- LADO ESQUERDO -->
           
        </div> <!--ROW  -->

<?php include 'rodape.php'?>
    
</div> <!--container-->
  <!-- arquivos Boootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
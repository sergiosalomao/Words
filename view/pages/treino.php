<?php include 'cabecalho.php' ?>

<body onload="preparaJogo()">
        
<?php 
//define variaveis
$nivel = 0;

$corretas = 0;

$erradas = 0;

$respondidas = 0;

$totalpalavras = 0;

$exp = 0;

$tempototal = 0;

$id = 0;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
};
if (isset($_GET['totalpalavras'])) {
    $totalpalavras = $_GET['totalpalavras'];
};
if (isset($_GET['respondidas'])) {
    $respondidas = $_GET['respondidas'];
};
if (isset($_GET['corretas'])) {
    $corretas = $_GET['corretas'];
};
if (isset($_GET['erradas'])) {
    $erradas = $_GET['erradas'];
};
if (isset($_GET['nivel'])) {
    $nivel = $_GET['nivel'];
};
if (isset($_GET['exp'])) {
    $exp = $_GET['exp'];
};
if (isset($_GET['tempototal'])) {
    $tempototal = $_GET['tempototal'];
};


require_once '../../controller/DicionarioDAO.php';
$nomeTabela = 'dicionario';
$daoDic = new DicionarioDAO($nomeTabela);
    //pega a traducao
if ($id != 0) {
    $traducao = $daoDic->ProcuraPorId($id)->palavraPortugues;


    ?>
    <script>
        var traducao = "<?php print $traducao; ?>";
    </script>
<?php

}

?>

    <div class="container">

    <?php include 'menu.php' ?>

       

    <!-- Conteudo -->
        <div class="row">
            
        <!-- LADO DIREITO -->    
            <div class="col-sm-9 fundo-branco">
                <br>
               <div id="alerta" class="alert alert-warning alert-dismissible fade show" role="alert" hidden>
                 <strong>Words!</strong> Digite uma Palavra!</strong>
                </div>    
               
                <div id="menuButtons">
                    <button id="btnIniciar" type="button" class="btn btn-info btn-sm" onclick="iniciaJogo()">Iniciar</button>
                    <button id="btnPause" type="button" class="btn btn-info btn-sm" onclick="pausaJogo()">Pause</button>
                    <button id="btnParar" type="button" class="btn btn-danger btn-sm" onclick="paraJogo()">Parar</button>
                    <button id="btnTraduzir" type="button" class="btn btn-info btn-sm" onclick="traduzir()">Traduzir</button>
                </div><br>
               
                <div class="form-group">
                    <!-- Pergunta -->
                        <textarea id="caixa-pergunta" class="display-4 estilo-caixa-pergunta" readonly><?php echo $_GET['pergunta']; ?></textarea>
                </div>  

                <div class="form-group">
                    <!-- Resposta -->
                    <form action="salvaResposta.php" autocomplete="off" >
                        <input id="caixa-resposta" name="resposta" class="display-4 estilo-caixa-resposta" disabled >
                        <input id="id" name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
                        <input id="statusJogo" name="statusJogo" type="hidden" value="<?php echo $_GET['statusJogo'] ?>">
                        <input id="nivel" name="nivel" type="hidden" value="<?php echo $nivel ?>">
                        <input id="erradas" name="erradas" type="hidden" value="<?php echo $erradas ?>">
                        <input id="tempo" name="tempo" type="hidden" >
                        <input id="tempototal" name="tempototal" type="hidden" value="<?php echo $tempototal ?>" >
                        <p>Experiencia.:</p>
                        
                    </form>
                </div>
                
                <!--barra de prograsso -->
                <div class="progress">
                    <div id="progressBar" class="progress-bar bg-success estilo-caixa-resposta" role="progressbar" style="width: <?php echo $exp ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                                

            </div><!-- LADO DIREIRO -->


            <!-- LADO ESQUERDO -->
            <div class="col-sm-3">
                
                <ul class="list-group">
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">Total Palavras
                        <span class="badge badge-secondary badge-pill"><?php echo $totalpalavras ?></span>
                    </li>
                    
                    <li  class="list-group-item d-flex justify-content-between align-items-center">Tempo para Responder
                            <span id="tempo-resposta" class="badge badge-warning badge-pill">0</span>
                    </li>
                        
                    <li  class="list-group-item d-flex justify-content-between align-items-center">Palavras Respondidas
                        <span id="palavras-respondidas" class="badge badge-primary badge-pill"><?php echo $respondidas ?></span>
                    </li>
                
                    <li class="list-group-item d-flex justify-content-between align-items-center">Respostas Certas
                        <span id="respostas-certas" class="badge badge-success badge-pill"><?php echo $corretas ?></span>
                     </li>
                    
                     <li class="list-group-item d-flex justify-content-between align-items-center">Respostas Erradas
                       <span id="respostas-erradas" class="badge badge-danger badge-pill"><?php echo $erradas ?></span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">Nivel
                       <spa id="nivel" class="badge badge-secondary badge-pill"><?php echo $nivel ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">Experiencia
                       <span id="exp" class="badge badge-primary badge-pill"><?php echo number_format($exp, 2, '.', ''); ?>%</span>
                    </li>
                    
                </ul>

            </div> <!-- LADO ESQUERDO -->
           
        </div> <!--ROW  -->

<?php include 'rodape.php' ?>
    
</div> <!--container-->
  <!-- arquivos Boootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
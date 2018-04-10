<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aprende Palavras</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    
    <!-- Estilos  -->
    <link rel="stylesheet" type="text/css" media="screen" href="../resources/css/estilos.css" />
    
    <!-- Arquivos JavaScript  -->
    <script src="../resources/js/funcoes.js"></script> 

</head>
<body>
    <div class="container fundo-branco">
       <?php include 'menu.php' ?>
      <br><br>
  
    <h1 class="display-4 centralizaHorizontal">Ranking </h1>
    <table class="table table-sm">
  <thead>
    <tr>
      
      <th class ="texto-centraliza" scope="col">#</th>
      <th scope="col">Jogador</th>
      <th class ="texto-centraliza" scope="col">Total de Palavras</th>
      <th class ="texto-centraliza" scope="col">Respondidas</th>
      <th class ="texto-centraliza" scope="col">Corretas</th>
      <th class ="texto-centraliza" scope="col">Erradas</th>
      <th class ="texto-centraliza" scope="col">Nivel</th>
      <th class ="texto-centraliza" scope="col">Tempo(seg)</th>
      <th class ="texto-centraliza" scope="col">Experiencia(%)</th>

    </tr>
  </thead>
  <?php 
  require_once '../../controller/RecordDAO.php';

  $nomeTabela = 'records';
  $dao = new RecordDAO($nomeTabela);

  foreach ($dao->ListarTodosPorClassificacao() as $key => $value) : ?>
     
  <tbody>
    <tr>
    <td class="texto-centraliza"><?php echo $value->idrecords ?></td>
    <td ><?php echo $value->jogador ?></td>
    <td class="texto-centraliza"><?php echo $value->totalpalavras ?></td>
      <td class="texto-centraliza"><?php echo $value->respondidas ?></td>
      <td class="texto-centraliza"><?php echo $value->corretas ?></td>
      <td class="texto-centraliza"><?php echo $value->erradas ?></td>
      <td class="texto-centraliza"><?php echo $value->nivel ?></td>
      <td class="texto-centraliza"><?php echo $value->tempo ?></td>
      <td class="texto-centraliza"><?php echo number_format($value->exp, 2, '.', '') ?></td>
    </tr>
    <button type="button" class="btn btn-secound btn-dark" onclick="history.back(2)">Voltar</button>
    <br><br>
<?php endforeach; ?>

<?php include 'rodape.php' ?>
  <!-- arquivos Boootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
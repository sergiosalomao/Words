<?php require_once 'cabecalho.php'?>


<body onload=paraJogo()">
    <div class="container fundo-branco">
     <?php include 'menu.php' ?>
     <br><br>
  <form method="get" action="salvaRecords.php">
    <div class="form-group">
    <label for="jogador">Jogador</label>
    <input type="text"  class="form-control" name="jogador" placeholder="nome do Jogador">
    <input type="hidden" name="totalpalavras" value="<?php echo $_GET['totalpalavras']; ?>">
    <input type="hidden" name="respondidas" value="<?php echo $_GET['respondidas']; ?>">
    <input type="hidden" name="corretas" value="<?php echo $_GET['corretas']; ?>">
    <input type="hidden" name="erradas" value="<?php echo $_GET['erradas']; ?>">
    <input type="hidden" name="nivel" value="<?php echo $_GET['nivel']; ?>">
    <input type="hidden" name="exp" value="<?php echo $_GET['exp']; ?>">
    <input type="hidden" name="tempo" value="<?php echo $_GET['tempo']; ?>">
  </div>
    <button type="submit" class="btn btn-success ">Gravar</button>
    <button type="button" class="btn btn-success" onclick="history.back(1)">Cancelar</button>
 </form>
<br><br>

<?php include 'rodape.php' ?>
    

  <!-- arquivos Boootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
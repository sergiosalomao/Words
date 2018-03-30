<?php
require_once '../DB/Conexao.php';
require_once 'Crud.php';


class RecordDAO extends CRUD {

    public function gravar()
    {

        
            $jogador = $_GET['jogador'];
        
        
            $caractere = $_GET['char'];
        
        
            $palavras = $_GET['word'];
        
        
            $cps = $_GET['cps'];
        
        
            $pps = $_GET['pps'];
        
     
      

        $sql = "INSERT INTO records (jogador,caractere,palavras,caracPorSeg,PalavraPorSeg) VALUES (?,?,?,?,?)";
        $stmt = Conexao::prepare($sql);
		//cria livro e adiciona

        $stmt->bindParam(1,$jogador);
        $stmt->bindParam(2,$caractere);
        $stmt->bindParam(3,$palavras);
        $stmt->bindParam(4,$cps);
        $stmt->bindParam(5,$pps);
           
        
        return $stmt->execute();
        
      
      
    }

function direciona(){

    header('Location: listaRecords.php');
}

}
?>


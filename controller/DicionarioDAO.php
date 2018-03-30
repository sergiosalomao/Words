<?php


require_once 'Conexao.php';
require_once 'Crud.php';

class DicionarioDAO extends Crud
{

    public function gravar($entidade)
    {
        $Respondida->getIdPalavraDicionario();
        $Respondida->getCorreta();
        $Respondida->getRespostaUsuario();
             
        
        $palavraIngles = $_GET['palavraIngles'];
        $palavraPortugues = $_GET['palavraPortugues'];

        $sql = "INSERT INTO dicionario (palavraIngles,palavraPortugues) VALUES (?,?)";
        $stmt = Conexao::prepare($sql);
		//cria livro e adiciona

        $stmt->bindParam(1, $palavraIngles);
        $stmt->bindParam(2, $palavraPortugues);


        return $stmt->execute();

    }


    public function copiaTabela(){

        $sql = "CREATE TABLE tbtemporaria AS SELECT * FROM dicionario;";
        $stmt = Conexao::prepare($sql);


        return $stmt->execute();

    }
}


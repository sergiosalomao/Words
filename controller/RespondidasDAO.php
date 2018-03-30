<?php
require_once 'Conexao.php';
require_once 'Crud.php';

class RespondidasDAO extends Crud
{

    public function gravar($Respondida)
    {
              
        $sql = "INSERT INTO respondidas (idPalavraDicionario,respostaUsuario,correta) VALUES (?,?,?)";
        $stmt = Conexao::prepare($sql);
		//cria livro e adiciona

        $stmt->bindParam(1, $Respondida->getIdPalavraDicionario());
        $stmt->bindParam(2, $Respondida->getRespostaUsuario());
        $stmt->bindParam(2,  $Respondida->getCorreta());

        return $stmt->execute();

    }

    
}


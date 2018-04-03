<?php


require_once 'Conexao.php';
require_once 'Crud.php';

class DicionarioDAO extends Crud
{

    public function gravar($entidade)
    {
        $Respondida = new Respondidas();
        $Respondida->getIdPalavraDicionario();
        $Respondida->getCorreta();
        $Respondida->getRespostaUsuario();
        $sql = "INSERT INTO dicionario (palavraIngles,palavraPortugues) VALUES (?,?)";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(1, $palavraIngles);
        $stmt->bindParam(2, $palavraPortugues);
        return $stmt->execute();
    }

    public function gravarDicionario($dicionario)
    {
        $id = $dicionario->getId();
        $palavraIngles = $dicionario->getPalavraIngles();
        $palavraPortugues = $dicionario->getPalavraPortugues();
        $dificuldade = $dicionario->getDificuldade();
        $sql = "INSERT INTO dicionario (palavraIngles,palavraPortugues,dificuldade) VALUES (?,?,?)";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(1, $palavraIngles);
        $stmt->bindParam(2, $palavraPortugues);
        $stmt->bindParam(3, $dificuldade);
        return $stmt->execute();
    }

    public function alteraDicionarioInseriPortugues($dicionario)
    {
        $id = $dicionario->getId();
        $palavraPortugues = $dicionario->getPalavraPortugues();
        $sql = "UPDATE dicionario SET palavraPortugues=? where id= ?";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(1, $palavraPortugues);
        $stmt->bindParam(2, $id);
        return $stmt->execute();
    }

    public function copiaTabela()
    {
        $sql = "CREATE TABLE tbtemporaria AS SELECT * FROM dicionario;";
        $stmt = Conexao::prepare($sql);
        return $stmt->execute();
    }

    public function selecionarProximaPalavra()
    {
        $sql = "Select * from dicionario where id not in (select idPalavraDicionario from respondidas where correta = 1)";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function ProcuraPalavraIgles($palavraIngles)
    {
        $sql = "SELECT * FROM $this->tabela WHERE palavraIngles = :palavraIngles";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':palavraIngles', $palavraIngles);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function apagaTabela($nomeTabela)
    {
        $sql = "DROP TABLE IF EXISTS $nomeTabela";
        $stmt = Conexao::prepare($sql);
        return $stmt->execute();
    }

    public function criarTabela($nomeTabela)
    {
        $sql = " CREATE TABLE IF NOT EXISTS $nomeTabela (
            id int(11) NOT NULL AUTO_INCREMENT,
            palavraIngles varchar(45) DEFAULT NULL,
            palavraPortugues varchar(45) DEFAULT NULL,
            dificuldade int ,
            PRIMARY KEY (id)
            )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
        $stmt = Conexao::prepare($sql);
        return $stmt->execute();
    }


}


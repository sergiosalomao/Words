<?php
require_once 'Conexao.php';
require_once 'Crud.php';


class RecordDAO extends CRUD
{

    public function gravar($entidade)
    {

        $sql = "INSERT INTO records (jogador,totalpalavras,respondidas,corretas,erradas,nivel,exp,tempo) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = Conexao::prepare($sql);
        $jogador = $entidade->getJogador();
        $totalpalavras = $entidade->getTotalpalavras();
        $respondidas = $entidade->getRespondidas();
        $corretas = $entidade->getCorretas();
        $erradas = $entidade->getErradas();
        $nivel = $entidade->getNivel();
        $exp = $entidade->getExp();
        $tempo = $entidade->getTempo();
        $stmt->bindParam(1, $jogador);
        $stmt->bindParam(2, $totalpalavras);
        $stmt->bindParam(3, $respondidas);
        $stmt->bindParam(4, $corretas);
        $stmt->bindParam(5, $erradas);
        $stmt->bindParam(6, $nivel);
        $stmt->bindParam(7, $exp);
        $stmt->bindParam(8, $tempo);
        return $stmt->execute();
    }

    public function alterar($id, $entidade)
    {
        $sql = "UPDATE records set jogador = ?,totalpalavras = ?,respondidas =?,corretas = ?,erradas =?,nivel=?,exp=? ,tempo= ? WHERE idrecords =?";
        $stmt = Conexao::prepare($sql);
        $jogador = $entidade->getJogador();
        $totalpalavras = $entidade->getTotalpalavras();
        $respondidas = $entidade->getRespondidas();
        $corretas = $entidade->getCorretas();
        $erradas = $entidade->getErradas();
        $nivel = $entidade->getNivel();
        $exp = $entidade->getExp();
        $tempo = $entidade->getTempo();
        $stmt->bindParam(1, $jogador);
        $stmt->bindParam(2, $totalpalavras);
        $stmt->bindParam(3, $respondidas);
        $stmt->bindParam(4, $corretas);
        $stmt->bindParam(5, $erradas);
        $stmt->bindParam(6, $nivel);
        $stmt->bindParam(7, $exp);
        $stmt->bindParam(8, $tempo);
        $stmt->bindParam(9, $id);
        return $stmt->execute();
    }

    public function ultimoRegistro()
    {
        $sql = "SELECT MAX(idrecords) FROM records";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function ListarTodosPorClassificacao()
    {
        $sql = "SELECT * FROM $this->tabela ORDER BY nivel DESC, exp,tempo";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}
?>


<?php
require_once 'Conexao.php';
require_once 'Crud.php';

class RespondidasDAO extends Crud
{

    public function gravar($entidade)
    {
              
        $sql = "INSERT INTO respondidas (idPalavraDicionario,respostaUsuario,correta,tempo) VALUES (?,?,?,?)";
        $stmt = Conexao::prepare($sql);
        $idPalavraDicionario = $entidade->getIdPalavraDicionario();
        $respostaUsuario = $entidade->getRespostaUsuario();
        $correta = $entidade->getCorreta();
        $tempo = $entidade->getTempo();
        $stmt->bindParam(1,$idPalavraDicionario);
        $stmt->bindParam(2, $respostaUsuario);
        $stmt->bindParam(3, $correta);
        $stmt->bindParam(4, $tempo);
        return $stmt->execute();
    }

    public function ProcuraIdPalavraDicionario($id){
        $sql = "SELECT * FROM respondidas WHERE idPalavraDicionario = :id ";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch();
	}

    public function ListarCorretas()
	{
		$sql = "SELECT * FROM $this->tabela where correta = 1";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
    }
    
    public function ListarErradas()
	{
		$sql = "SELECT * FROM $this->tabela where correta = 0";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
    }
    
    
    public function somaTempo()
	{
		$sql = "SELECT SUM(tempo) AS somatempo FROM $this->tabela";
		$stmt = Conexao::prepare($sql);
        $stmt->execute();
		return $stmt->fetch();
	}
   
    
}


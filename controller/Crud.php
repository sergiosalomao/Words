<?php
require_once 'Conexao.php';
abstract class Crud extends Conexao
{
	protected $tabela ;
	abstract public function gravar($entidade);
//	abstract public function atualizar($id);
//	abstract public function deletar($id);

function __construct($nomeTabela) {

	$this->tabela = $nomeTabela;

}


public function ProcuraPorId($id)
	{
		$sql = "SELECT * FROM $this->tabela WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch();
	}

	

	public function ListarTodos()
	{
		$sql = "SELECT * FROM $this->tabela";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function apagaPorId($id)
	{
		$sql = "DELETE FROM $this->tabela WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	
	}

	public function limpaTabela()
	{
		$sql = "DELETE FROM $this->tabela";
		$stmt = Conexao::prepare($sql);
		return $stmt->execute();
	
	}

	public function ProcuraTabela($tabela)
    {
        $sql = "SHOW TABLES LIKE '$tabela'";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }



}
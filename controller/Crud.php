<?php
require_once 'Conexao.php';
abstract class Crud extends Conexao
{
	public $tabela = 'dicionario';
	abstract public function gravar($entidade);
//	abstract public function atualizar($id);
//	abstract public function deletar($id);


public function ProcuraPorId($id)
	{
		$sql = "SELECT * FROM dicionario WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function ProcuraPalavraPortugues($palavraIngles)
	{
		$sql = "SELECT * FROM $this->tabela WHERE palavraIngles = :palavraPortugues";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':palavraPortugues', $palavraPortugues);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function ProcuraPalavraIgles($palavraIngles)
	{
		$sql = "SELECT * FROM $this->tabela WHERE palavraIngles = :palavraIngles";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':palavraIngles', $palavraIngles);
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

	 public function setTabela()
    {
        return $this->tabela;
    }




}
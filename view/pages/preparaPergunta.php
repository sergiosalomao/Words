<?php
require_once '../../controller/DicionarioDAO.php';
$dao = new DicionarioDAO();
//lista total de registros


$listados = $dao->ListarTodos();
   
//conta o total de registros
$totalEncontrado = count($listados);

//adiciona a variavel id um numero aleatorio entre 0 e o total de registros da tabela
$id = rand(1, $totalEncontrado);

//passa o valor da palavra pergunta do banco para a variavel
$pergunta = $dao->ProcuraPorId($id)->palavraIngles;

//pega o id da resposta para comparação
$respostaPergunta = $dao->ProcuraPorId($id)->palavraPortugues;


header('location:/words/view/pages/treino.php?id=' . $id . '&pergunta=' . $pergunta );

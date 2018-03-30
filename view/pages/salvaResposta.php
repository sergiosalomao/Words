<?php
require_once '../model/Respondidas.php';
require_once 'words/controller/RespondidasDAO.php';
require_once 'words/controller/DicionarioDAO.php';



$id = $_GET['id'];
$resposta = $_GET['resposta'];

$entidade = new Respondidas();
// preparar a proxima pergunta (verifica se ja foi chamada e depois gera o ID da pergunta com RANDOM 

//pega o id da palavra
$entidade->setIdpalavraDicionario($id);

//pega a resposta do usuario
$entidade->setRespostaUsuario($resposta);

//informa se ela foi respondida corretamente
$gabarito = $dao->ProcuraPorId($id)->palavraPortugues;
if($resposta == $gabarito){
    $entidade->setCorreto(1);
} else {
    $entidade->setCorreto(0);
}

//salva na tabela



$dao = new DicionarioDAO();
$dao->setTabela('dicionario');
$dao->gravar($entidade);

/*
//passa o valor da proxima pergunta
$pergunta = $dao->ProcuraPorId($id)->palavraIngles;

//pega o id da resposta para comparação
$respostaPergunta = $dao->ProcuraPorId($id)->palavraPortugues;



$listados = $dao->ListarTodos();
   
//conta o total de registros
$totalEncontrado = count($listados);

//adiciona a variavel id um numero aleatorio entre 0 e o total de registros da tabela
$idSorteado = rand(1, $totalEncontrado);


//passa o valor da proxima pergunta
$pergunta = $dao->ProcuraPorId($idSorteado)->palavraIngles;

//pega o id da resposta para comparação
$respostaPergunta = $dao->ProcuraPorId($id)->palavraPortugues;



//header('location:treino.php?id=' . $id . '&pergunta=' . $pergunta );
*/
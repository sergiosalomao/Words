<?php

require_once '../../controller/RespondidasDAO.php';
require_once '../../controller/DicionarioDAO.php';
require_once '../../model/Respondidas.php';

$id = $_GET['id'];

$resposta = $_GET['resposta'];
$tempo = $_GET['tempo'];

$entidade = new Respondidas();

//pega o id da palavra
$entidade->setIdpalavraDicionario($id);

//pega a resposta do usuario
$entidade->setRespostaUsuario($resposta);

//pega o tempo da resposta
$entidade->setTempo($tempo);

//informa se ela foi respondida corretamente
$nomeTabela = 'dicionario';
$dao = new DicionarioDAO($nomeTabela);
$gabarito = $dao->ProcuraPorId($id)->palavraPortugues;
if ($resposta == $gabarito) {
    $entidade->setCorreta(1);
    
//salva na tabela
$nomeTabela = 'respondidas';
$daoResp = new RespondidasDAO($nomeTabela);
$daoResp->gravar($entidade);

$erradas = $_GET['erradas'];

} else {
    $entidade->setCorreta(0);
    $erradas = $_GET['erradas'] + 1;
}

header('location:preparaPergunta.php?erradas='. $erradas . '&tempo='.$tempo);

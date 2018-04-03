<?php
require_once 'cabecalho.php';
require_once '../../model/Dicionario.php';
require_once '../../controller/DicionarioDAO.php';
$nomeTabela = 'dicionario';

$daoDic = new DicionarioDAO($nomeTabela);

$nomeTabela = 'dicionario';
$daoDic->apagaTabela($nomeTabela);

$daoDic->criarTabela($nomeTabela);

if (isset($_POST['ingles'])) {
    $textoIngles = $_POST['ingles'];
};
if (isset($_POST['portugues'])) {
    $textoPortugues = $_POST['portugues'];
};

function inseriPalavraIngles($textoIngles)
{
    $text = explode(PHP_EOL, $textoIngles);

    foreach ($text as $linha) { 

        //salva na tabela
        $nomeTabela = 'dicionario';
        $daoDic = new DicionarioDAO($nomeTabela);
        $dicionario = new Dicionario();
        $dicionario->setPalavraIngles($linha);
        $dicionario->setDificuldade(0);
        $daoDic->gravarDicionario($dicionario);
    }
}

inseriPalavraIngles($textoIngles);

function inseriPalavraPortugues($textoPortugues)
{
    $text = explode(PHP_EOL, $textoPortugues);
    $contador = 1;
    foreach ($text as $linha) { 
        
        //salva na tabela
        $nomeTabela = 'dicionario';
        $daoDic = new DicionarioDAO($nomeTabela);
        $dicionario = new Dicionario();
        $dicionario->setId($contador);
        $dicionario->setPalavraPortugues($linha);
        $daoDic->alteraDicionarioInseriPortugues($dicionario);
        $contador++;
    }
}

inseriPalavraPortugues($textoPortugues);

header('Location: ensinar.php');
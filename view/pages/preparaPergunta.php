
<?php
require_once '../../controller/DicionarioDAO.php';
require_once '../../controller/RespondidasDAO.php';
//variaveis
$idPalavraDicionario = null;

$nomeTabela = "dicionario";
$daoDic = new DicionarioDAO($nomeTabela);

$nomeTabela = "respondidas";
$daoResp = new RespondidasDAO($nomeTabela);

//Lista todos do dicionario e pega o total de palavras
$totalEncontrado = count($daoDic->ListarTodos());

//adiciona a variavel id um numero aleatorio entre 0 e o total de registros da tabela
$id = rand(1, $totalEncontrado);

//verificar se a palavra sorteada ja foi chamada
$idPalavraDicionario = $daoResp->ProcuraIdPalavraDicionario($id);
if ($idPalavraDicionario) {
    $encontrado = true;
} else {
    $encontrado = false;
}

//verifica se o id que existe é uma palavra correta ou nao
$correta = $daoResp->ProcuraIdPalavraDicionario($id)->correta;

// passa os parametros das respostas certas e erradas
$totalPalavras = 0;
$totalErradas = 0;
$totalCorretas = 0;

$totalPalavras = count($daoDic->ListarTodos());

$totalCorretas = count($daoResp->ListarCorretas()); //lista total corretas

$totalErradas = $totalErradas + $_GET['erradas']; //ListaTotal erradas

$totalRespondidas = count($daoResp->ListarTodos()); //lista total respondidas

$totalRespondidas = $totalRespondidas + $totalErradas;

$totaltempo = $_GET['tempo'];

//calcula a experiencia
$exp = 0;

if ($totalCorretas > 0) {
    $exp = ($totalCorretas - $totalErradas);
    $exp = ($exp / $totalPalavras) * 100;

    if ($exp < 0) {
        $exp = 0;
    }
} 

//nivel
$nivel = ($totalCorretas - $totalErradas) / 20;
if ($nivel < 0) $nivel = 1;

if ($encontrado && $correta) {

    if ($totalCorretas == $totalPalavras) {
        header('location:/words/view/pages/mostraResultados.php?id=' . $id .
            '&pergunta=' . $pergunta .
            '&statusJogo=iniciado' .
            '&respondidas=' . $totalRespondidas .
            '&corretas=' . $totalCorretas .
            '&erradas=' . $totalErradas .
            '&nivel=' . $nivel .
            '&exp=' . $exp .
            '&tempo=' . $totaltempo .
            '&totalpalavras=' . $totalPalavras);
    }
    $i = -1;
    while ($encontrado == true && $correta == 1 && $i <= $totalEncontrado) {

        $i++;

        $id = rand(1, $totalEncontrado);
        $idPalavraDicionario = $daoResp->ProcuraIdPalavraDicionario($id);

        $correta = $daoResp->ProcuraIdPalavraDicionario($id)->correta;
        
        //verificar se a palavra sorteada ja foi chamada
        $idPalavraDicionario = $daoResp->ProcuraIdPalavraDicionario($id);
        if ($idPalavraDicionario) {
            $encontrado = true;
        } else {
            $encontrado = false;
        }

        if ($correta == 0) {
           $pergunta = $daoDic->ProcuraPorId($id)->palavraIngles;
        }
    }
} else {
    $pergunta = $daoDic->ProcuraPorId($id)->palavraIngles;
}

if ($totalCorretas == $totalPalavras) {
    header('location:/words/view/pages/mostraResultados.php?id=' . $id .
        '&pergunta=' . $pergunta .
        '&statusJogo=iniciado' .
        '&respondidas=' . $totalRespondidas .
        '&corretas=' . $totalCorretas .
        '&erradas=' . $totalErradas .
        '&nivel=' . $nivel .
        '&exp=' . $exp .
        '&tempo=' . $totaltempo .
        '&totalpalavras=' . $totalPalavras);
} else {
    header('location:/words/view/pages/treino.php?id=' . $id .
        '&pergunta=' . $pergunta .
        '&statusJogo=iniciado' .
        '&respondidas=' . $totalRespondidas .
        '&corretas=' . $totalCorretas .
        '&erradas=' . $totalErradas .
        '&nivel=' . $nivel .
        '&exp=' . $exp .
        '&tempo=' . $totaltempo .
        '&totalpalavras=' . $totalPalavras);
}


<?php
require_once '../../controller/RespondidasDAO.php';
$nomeTabela = 'respondidas';
$daoResp = new RespondidasDAO($nomeTabela);
$daoResp->limpaTabela();

header('location:/words/view/pages/treino.php?pergunta=&statusJogo=preparar');

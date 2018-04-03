<?php
require_once '../../controller/RespondidasDAO.php';

$tabela = 'respondidas';
$dao = new RespondidasDAO($tabela);
$dao->limpaTabela();

header('location:/words/view/pages/treino.php?pergunta=&statusJogo=gameover');

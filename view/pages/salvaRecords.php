<?php

require_once '../../model/Record.php';
require_once '../../controller/RecordDAO.php';
require_once '../../controller/RespondidasDAO.php';

$tabela = 'respondidas';
$daoResp= new RespondidasDAO($tabela);

if (isset($_GET['jogador'])){$jogador = $_GET['jogador'];}
if (isset($_GET['totalpalavras'])){$totalpalavras = $_GET['totalpalavras'];}
if (isset($_GET['respondidas'])){$respondidas = $_GET['respondidas'];}
if (isset($_GET['corretas'])){$corretas = $_GET['corretas'];}
if (isset($_GET['erradas'])){$erradas = $_GET['erradas'];}
if (isset($_GET['nivel'])){$nivel = $_GET['nivel'];}
if (isset($_GET['exp'])){$exp = $_GET['exp'];}

$tempo = $daoResp->somaTempo()->somatempo;

$daoResp->limpaTabela();

$record = new Record();
$record->setJogador($jogador);
$record->setTotalpalavras($totalpalavras);
$record->setRespondidas($respondidas);
$record->setCorretas($corretas);
$record->setErradas($erradas);
$record->setNivel($nivel);
$record->setExp($exp);
$record->setTempo($tempo);

$daoRecord = new RecordDAO($record);
$daoRecord->gravar($record);

header('Location: listaRecords.php');

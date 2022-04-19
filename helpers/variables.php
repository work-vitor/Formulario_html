<?php


//ID

if (isset($_POST['id'])) {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $id = 0;
}

if (isset($_POST['Acao'])) {
    $Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Acao'])) {
    $Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $Acao = "";
}


//Nome da Tarefa

if (isset($_POST['nm_tar'])) {
    $nome_tar = filter_input(INPUT_POST, 'nm_tar', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['nome'])) {
    $nome_tar = filter_input(INPUT_GET, 'nm_tar', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $nome_tar = "";
}

//Data de entrega

if (isset($_POST['pe'])) {
    $prazo_ent = filter_input(INPUT_POST, 'pe', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['pe'])) {
    $prazo_en = filter_input(INPUT_GET, 'pe', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $prazo_en = "";
}

//Prioridade

if (isset($_POST['prio'])) {
    $prio = filter_input(INPUT_POST, 'prio', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['prio'])) {
    $prio = filter_input(INPUT_GET, 'prio', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $prio = "";
}

//Responsavel

if (isset($_POST['selec'])) {
    $resp = filter_input(INPUT_POST, 'selec', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['selec'])) {
    $resp = filter_input(INPUT_GET, 'selec', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $resp = "";
}


//Observacao

if (isset($_POST['obs'])) {
    $obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['obs'])) {
    $obs = filter_input(INPUT_GET, 'obs', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $obs = "";
}
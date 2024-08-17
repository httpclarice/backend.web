<?php

$uri = $_SERVER['REQUEST_URI'];
$queryString = parse_url($uri, PHP_URL_QUERY);
parse_str($queryString, $params);

if (isset($params['codigo'])) {
    if (preg_match('/^[0-9]{3}$/', $params['codigo'])) {
        $single = $db->query("SELECT C.id AS chapas_id, C.codigo AS codigo_chapas, C.nome AS nome_chapas, L.nome AS nome_lider, V.nome AS nome_vice_lider FROM chapas AS C JOIN alunos AS L ON C.lider = L.id JOIN alunos AS V ON C.vice_lider = V.id WHERE C.codigo={$params['codigo']}")->fetch();
    }
} else {
    $all = $db->query("SELECT id,codigo,nome FROM chapas ORDER BY codigo")->fetchAll();
}

extract([
    'route' => 'consult',
    'title' => 'Consultar',
]);
require '../app/views/consult.view.php';
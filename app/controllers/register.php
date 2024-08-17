<?php

$alunos = $db->query("SELECT * FROM alunos ORDER BY nome")->fetchAll();

extract([
    'route' => 'register',
    'title' => 'Cadastrar',
]);
require '../app/views/register.view.php';
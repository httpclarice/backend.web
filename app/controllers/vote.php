<?php

if(isset($_COOKIE['vote'])) {
    $value = json_decode($_COOKIE['vote'], true);
    setcookie('vote','',time() - 60, '/', '', false, true);

    if ($value[1] === 'err.id') {
        $err_matricula = True;
    } elseif ($value[1] === 'err.already_voted') {
        $err_voted = True;
    } else {
        $accept = True;
        $chapas = $db->query("SELECT * FROM chapas ORDER BY codigo")->fetchAll();
        setcookie('insert',$value[1],time() + 3600, '/', '', false, true);
    }
}

extract([
    'route' => 'vote',
    'title' => 'Votar'
]);

require '../app/views/vote.view.php';
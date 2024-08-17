<?php

$post_register_keys = ['nome-chapa', 'codigo-chapa', 'lider-chapa', 'vice-chapa'];

$found_keys = [];

foreach ($post_register_keys as $key) {
    if (array_key_exists($key, $post)) {
        $found_keys[] = $key;
    }
}

if (count(array_keys($post)) === count($found_keys))
{
    $statement = $db->query('INSERT INTO chapas (codigo, nome, lider, vice_lider) VALUES (:codigo, :nome, :lider, :vice)', [
        'nome' => $post['nome-chapa'],
        'codigo' => $post['codigo-chapa'],
        'lider' => $post['lider-chapa'],
        'vice' => $post['vice-chapa']
    ]);
    $id = $db->conn->lastInsertId();
    $code = $db->query("SELECT codigo FROM chapas WHERE id={$id}")->fetch();
    header("Location: /consult?codigo={$code['codigo']}");
}
elseif (array_key_exists('chapas',$post))
{
    $id = $post['chapas'];
    $code = $db->query("SELECT codigo FROM chapas WHERE id={$id}")->fetch();
    header("Location: /consult?codigo={$code['codigo']}");
}
elseif (array_key_exists('matricula',$post)) {
    $id = $db->query("SELECT id FROM alunos WHERE matricula={$post['matricula']}")->fetch();

    if ($id) {
        $already_voted = $db->query("SELECT COUNT(*) AS votes FROM votos WHERE aluno={$id['id']}")->fetch();
        if($already_voted['votes'] === 0) {
            $data = [$post['matricula'], $id['id']];
            setcookie('vote',json_encode($data),time() + 60, '/', '', false, true);
        } else {
            $data = [$post['matricula'], 'err.already_voted'];
            setcookie('vote',json_encode($data),time() + 60, '/', '', false, true);
        }
    } else {
        $data = [$post['matricula'], 'err.id'];
        setcookie('vote',json_encode($data),time() + 60, '/', '', false, true);
    }

    header("Location: /vote");
}
elseif (array_key_exists('chapa', $post))
{
    $id = $_COOKIE['insert'];
    setcookie('insert','',time() - 60, '/', '', false, true);

    $statement = $db->query('INSERT INTO votos (aluno, chapa) VALUES (:aluno, :chapa)', [
        'aluno' => $id,
        'chapa' => $post['chapa'],
    ]);
    header("Location: /report");
}


<?php


$statement = $db->query('SELECT ( SELECT COUNT(*) FROM votos ) AS total_de_votos, c.codigo AS codigo_chapa, c.nome AS nome_chapa, COUNT(*) AS total_de_votos_por_chapa FROM votos v JOIN chapas c ON v.chapa = c.id GROUP BY v.chapa ORDER BY total_de_votos_por_chapa DESC')->fetchAll();


extract([
    'route' => 'report',
    'title' => 'Relatório'
]);

require '../app/views/report.view.php';
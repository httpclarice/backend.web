<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    <br>
    <p>Relatório da votação</p>
    <hr>
    <br>
    <?php if(count($statement) > 0) : ?>
        <h4>Total de votos computados: <?= $statement[0]['total_de_votos'] ?></h4>
        <br>
        <?php foreach ($statement as $item) : ?>
            <h5><?= $item['codigo_chapa'] . ' - ' . $item['nome_chapa'] ?> — Votos: <?= $item['total_de_votos_por_chapa'] . ' (' . number_format($item['total_de_votos_por_chapa'] / $item['total_de_votos'] * 100,2) . '%)' ?></h5>
        <?php endforeach; ?>
    <?php else : ?>
        <h4>Nenhum voto registrado.</h4>
    <?php endif; ?>

<?php require('partials/bottom.php'); ?>
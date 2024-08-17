<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    <br>
    <p><?= isset($single) ? 'Exibindo informações da chapa' : 'Selecione uma chapa' ?></p>
    <hr>
    <br>

    <?php if (isset($single)) : ?>
        <h4>Nome da chapa: <?= $single['nome_chapas'] ?></h4>
        <h4>Código: <?= $single['codigo_chapas'] ?></h4>
        <h4>Líder: <?= $single['nome_lider'] ?></h4>
        <h4>Vice-líder: <?= $single['nome_vice_lider'] ?></h4>
        <br>
    <a href="/consult" class="botao">Consultar outra chapa</a>
    <?php else: ?>
            <form method="POST" action="/">
                <label class="label" for="chapas">Selecione uma chapa:</label>
                <div>
                    <select id="chapas" name="chapas" required>
                        <?php foreach ($all as $chapa) : ?>
                        <option value="<?= $chapa['id'] ?>"><?= $chapa['codigo'] . " - " . $chapa['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>

                <button type="submit" value="search">Consultar</button>
            </form>
    <?php endif; ?>

<?php require('partials/bottom.php'); ?>
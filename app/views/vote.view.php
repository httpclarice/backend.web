<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    <br>
    <p><?= isset($accept) ? 'Selecione apenas uma chapa' : 'Digite sua matrícula' ?></p>
    <hr>
    <br>

<!--    <form method="POST" action="/">-->
<!--        <label class="label" for="matricula">Matrícula:</label>-->
<!--        <div><input type="text" id="matricula" name="matricula" maxlength="9" pattern="\d{9}" placeholder="Ex: 123456789" required></div>-->
<!--        <br>-->
<!---->
<!--        <button type="submit" value="Votar">Votar</button>-->
<!--    </form>-->

    <form method="POST" action="/">
        <?php if(!isset($accept)) : ?>
            <label class="label" for="matricula">Matrícula:</label>
            <div><input type="text" id="matricula" name="matricula" maxlength="9" pattern="\d{9}" placeholder="Ex: 123456789" required value="<?= isset($value) ? $value[0] : '' ?>"></div>
            <?= isset($err_matricula) ? '<h6 style="color: red">Aluno não encontrado!</h6>' : '' ?>
            <?= isset($err_voted) ? '<h6 style="color: red">Aluno já votou!</h6>' : '' ?>
            <br>
        <?php else : ?>
            <?php foreach ($chapas as $chapa) : ?>
                <input type="radio" name="chapa" value="<?= $chapa['id'] ?>" id="<?= $chapa['id'] ?>">
                <label for="<?= $chapa['id'] ?>"><?= $chapa['codigo'] . ' - ' . $chapa['nome'] ?></label>
            <br>
            <?php endforeach; ?>
        <?php endif; ?>

        <br>
        <button type="submit" value="Votar">Votar</button>
    </form>


<?php require('partials/bottom.php'); ?>
<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    <br>
    <p>Cadastre uma nova chapa para participar da eleição</p>
    <hr>
    <br>

    <div>
        <form method="POST" action="/">
            <!-- Campo para o nome da chapa -->
            <label class="label" for="nome-chapa">Nome da chapa:</label>
            <div><input type="text" id="nome-chapa" name="nome-chapa" required></div>
            <br>

            <!-- Campo para o código da chapa -->
            <label class="label" for="codigo-chapa">Código da chapa:</label>
            <div><input type="text" id="codigo-chapa" name="codigo-chapa" maxlength="3" pattern="\d{3}" placeholder="Ex: 012" required></div>
            <br>

            <!-- Campo para selecionar o líder da chapa -->
            <label class="label" for="lider-chapa">Líder da chapa:</label>
            <div>
                <select id="lider-chapa" name="lider-chapa" required>
                    <option value="" disabled selected>Escolha um aluno</option>
                    <?php foreach ($alunos as $aluno) : ?>
                        <option value="<?= $aluno['id'] ?>"><?= $aluno['nome'] . " - MAT: " . $aluno['matricula'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>

            <!-- Campo para selecionar o vice-líder da chapa -->
            <label class="label" for="vice-chapa">Vice-líder da chapa:</label>
            <div>
                <select id="vice-chapa" name="vice-chapa" required>
                    <option value="" disabled selected>Escolha um aluno</option>
                    <?php foreach ($alunos as $aluno) : ?>
                        <option value="<?= $aluno['id'] ?>"><?= $aluno['nome'] . " - MAT: " . $aluno['matricula'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>

            <button type="submit" value="Enviar">Cadastrar</button>
        </form>
    </div>

<?php require('partials/bottom.php'); ?>
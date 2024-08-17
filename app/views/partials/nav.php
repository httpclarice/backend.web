<ul>
    <li class="<?= $route === "index" ? "selected" : "" ?>">
        <?php if ($route === "index") : ?>
            <a>Início</a>
        <?php else : ?>
            <a href="/">Início</a>
        <?php endif; ?>
    </li>

    <li class="<?= $route === "register" ? "selected" : "" ?>">
        <?php if ($route === "register") : ?>
            <a>Cadastrar chapa</a>
        <?php else : ?>
            <a href="/register">Cadastrar chapa</a>
        <?php endif; ?>
    </li>

    <li class="<?= $route === "consult" ? "selected" : "" ?>">
        <?php if ($route === "consult") : ?>
            <a>Consultar chapa</a>
        <?php else : ?>
            <a href="/consult">Consultar chapa</a>
        <?php endif; ?>
    </li>

    <li class="<?= $route === "vote" ? "selected" : "" ?>">
        <?php if ($route === "vote") : ?>
            <a>Votar</a>
        <?php else : ?>
            <a href="/vote">Votar</a>
        <?php endif; ?>
    </li>

    <li class="<?= $route === "report" ? "selected" : "" ?>">
        <?php if ($route === "report") : ?>
            <a>Relatório da votação</a>
        <?php else : ?>
            <a href="/report">Relatório da votação</a>
        <?php endif; ?>
    </li>
</ul>

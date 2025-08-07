<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_notificacao">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">
        <section ion class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=configuracao" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2>Notificações<br>e<br>Comunicados</h2>
        </section>

        <section class="cards">
            <div class="card">
                <h3>Nota Lançada</h3>
                <p>Sua nota da avaliação 2 de Desenvolvimento Web foi atualizada.</p>
                <p>15/07/2025 14:00</p>
            </div>
            <div class="card">
                <h3>Evento: Feira Tecnológica</h3>
                <p>Participe da feira tecnologica no dia 20/08 no nosso campus principal.</p>
                <p>15/07/2025 14:57</p>
            </div>
            <div class="card">
                <h3>Atualização de Dados</h3>
                <p>Verifique e atualize seus dados pessoais no menu de configurações na guia Perfil</p>
                <p>15/07/2025 16:40</p>
            </div>
        </section>
    </main>
    <?php require_once('template/footer.php') ?>

</body>
</html>
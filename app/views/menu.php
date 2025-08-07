<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body id="index_menu" class="body_menu">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">

        <section class="boas-vindas">
            <h2>Olá, José!</h2>
            <p>O que você deseja fazer hoje?</p>
        </section>


        <section class="cards">
            <h3>Acesso Rápido</h3>
            <ul class="menu-lista">
                <li><a href="<?= URL_BASE; ?>index.php?url=cursos"><img src="assets/img/icon/books.png" alt="icon do menu cursos"> Meus Cursos</a></li>
                <li><a href="<?= URL_BASE; ?>index.php?url=minhasNotas"><img src="assets/img/icon/notes.png" alt="icon do menu notas"> Minhas Notas</a></li>
                <li><a href="<?= URL_BASE; ?>index.php?url=meusProjetos"><img src="assets/img/icon/project.png" alt="icon do menu projetos"> Meus Projetos</a></li>
                <li><a href="<?= URL_BASE; ?>index.php?url=mensagens"><img src="assets/img/icon/mail.png" alt="icon do menu mensagem"> Enviar Mensagem</a></li>
                <li><a href="<?= URL_BASE; ?>index.php?url=configuracao"><img src="assets/img/icon/config.png" alt="icon do menu configurações"> Configurações</a></li>
            </ul>
        </section>

    </main>

    <?php require_once('template/footer.php') ?>

    <script src="assets/js/script.js"></script>

</body>

</html>
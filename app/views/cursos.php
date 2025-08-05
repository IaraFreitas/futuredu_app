<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_cursos">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">
        <section ion class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=menu" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2>Cursos Matriculados</h2>
        </section>

        <section class="cards">
            <div class="card">
                <div class="foto-padrao-curso">
                    <img src="assets/img/categorias/sem-foto.jpg" alt="Foto do curso">
                </div>
                <div>
                    <h3>DEVWEB01</h3>
                    <H4>Desenvolvimento Web</H4>
                    <p>Modalidade Presencial</p>
                    <p>Carga Horária: 200h</p>
                </div>
            </div>
            <div class="card">
                <div class="foto-padrao-curso">
                    <img src="assets/img/categorias/sem-foto.jpg" alt="Foto do curso">
                </div>
                <div>
                    <h3>DESGRA01</h3>
                    <H4>Design Gráfico</H4>
                    <p>Modalidade Online</p>
                    <p>Carga Horária: 160h</p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('template/footer.php') ?>

</body>
</html>
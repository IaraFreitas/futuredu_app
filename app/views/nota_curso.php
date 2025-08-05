<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_nota-curso">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">
        <section ion class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=cursos" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2>Nota do Curso DEVWEB01</h2>
        </section>

        <section class="cards">
            <div class="card">
                <div>
                    <h3>Avaliação 1</h3>
                    <p>Média: 7.8</p>
                    <p>Data: 16/05/2025</p>
                    <H4>Observação</H4>
                    <p>Boa estrutura de código, utilize mais comentários.</p>
                </div>
            </div>
            <div class="card">
                <div>
                    <h3>Projeto Prático</h3>
                    <p>Média: 9.0</p>
                    <p>Data: 16/05/2025</p>
                    <H4>Observação</H4>
                    <p>Ótimo projeto, bem documentado, mas ainda pode melhorar nos comentários.</p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('template/footer.php') ?>

</body>
</html>
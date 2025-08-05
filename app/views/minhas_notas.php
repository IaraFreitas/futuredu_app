<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_minhas-notas">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">
        <section ion class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=menu" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2>Minhas Notas</h2>
        </section>

        <section class="cards">
            <div class="card">
                <div>
                    <h3>DEVWEB01</h3>
                    <H4>Desenvolvimento Web</H4>
                    <p>Média: 7.8</p>
                    <p>Data: 16/05/2025</p>
                    <H4>Observação</H4>
                    <p>Sua lógica está muito boa, mas pode melhorar a identação.</p>
                </div>
            </div>
            <div class="card">
                <div>
                    <h3>DESGRA01</h3>
                    <H4>Design Gráfico</H4>
                    <p>Média: 9.0</p>
                    <p>Data: 16/05/2025</p>
                    <H4>Observação</H4>
                    <p>Excelente apresentação visual.</p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('template/footer.php') ?>

</body>
</html>
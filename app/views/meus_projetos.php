<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_meus-projetos">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">
        <section ion class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=menu" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2>Meus Projetos</h2>
        </section>

        <section class="cards">
            <div class="card">
                <div>
                    <h3>Sistema de Biblioteca</h3>
                    <p>Professor: Ana Costa</p>
                    <p>Status: Concluído</p>
                    <p>Nota: 9.3</p>
                    <p>Período: Jan/2025 - Mar/2025</p>
                    <a href="#"><img src="assets/img/icon/link.png" alt="foto do link" width="18px" height="18px"> Acessar Projeto</a>
                </div>
            </div>
            <div class="card">
                <div>
                    <h3>Sistema de Biblioteca</h3>
                    <p>Professor: Carlos Lima</p>
                    <p>Status: Em andamento</p>
                    <p>Nota: - </p>
                    <p>Período: Mai/2025 - Set/2025</p>
                    <a href="#"><img src="assets/img/icon/link.png" alt="foto do link" width="18px" height="18px"> Link ainda não disponível</a>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('template/footer.php') ?>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body id="index_menu" class="body-perfil">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">

        <section class="perfil-aluno">

            <section class="titulo">
            <a href="<?=URL_BASE;?>index.php?url=menu" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a> 
                <h2>Perfil do Aluno</h2>
            </section>

            <div class="foto-padrao">
                <img src="assets/img/aluno/sem-foto.jpg" alt="Foto do aluno">
            </div>

            <div class="info-aluno">
                <p><strong>Nome:</strong><br> José da Silva</p>
                <p><strong>E-mail:</strong><br> jose.silva@email.com</p>
                <p><strong>Telefone:</strong><br> (11) 91234-5679</p>
                <p><strong>Data nascimento:</strong><br> 10/05/2000</p>
                <p><strong>Endereço:</strong><br> Rua A, 100 - Centro, São Paulo / SP</p>
                <p><strong>Responsável:</strong><br> Maria da Silva - (11) 91234-5678</p>
            </div>

            <div class="btn-container">
                <a class="btn-login" href="<?=URL_BASE;?>index.php?url=login"><i class="bi bi-box-arrow-left"></i>Sair</a>
                <!-- <button type="submit" class="btn-login"><i class="bi bi-box-arrow-left"></i> Sair</button> -->
            </div>

        </section>

    </main>

    <?php require_once('template/footer.php') ?>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_configuracao">

    <?php require_once('template/header.php') ?>

    <main>
        <section class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=menu" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>            
            <h2>Configurações</h2>
        </section>

        <ul class="menu-lista">
            <li>
                <a href="<?= URL_BASE ?>index.php?url=atualizarDados">
                    <i class="bi bi-person-fill"></i> Atualização de dados pessoais
                </a>
            </li>
            <li>
                <a href="<?= URL_BASE;?>index.php?url=notificacao">
                    <i class="bi bi-bell-fill"></i> Notificações e Comunicados
                </a>
            </li>
        </ul>

        <div class="btn-container">
            <button type="submit" class="btn-sair">
                <a href="index.php"><i class="bi bi-box-arrow-left"></i> Sair</a>    
            </button>
        </div>
        </section>
    </main>

    <?php require_once('template/footer.php') ?>


</body>
</html>
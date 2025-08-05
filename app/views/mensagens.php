<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body class="body_mensagens">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">
        <section ion class="titulo">
            <a href="<?= URL_BASE; ?>index.php?url=menu" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2>Contato com a Coordenação</h2>
        </section>

        <section class="cards">
            <div class="card">
                <div>
                    <h3>Formas de contato</h3>
                    <p>E-mail: coordenacao@futuredu.com.br</p>
                    <p>Telefone: (11) 4002-8922</p>
                    <p>WhatsApp: (11) 98888-7766</p>
                    <p>Horário de atend.: Seg á Sex, 08h às 17h</p>
                </div>
            </div>
            <!-- Formulário de contato -->
            <form class="formulario-contato" action="<?=URL_BASE;?>index.php?url=menu" method="post">
                <label for="assunto">Assunto</label>
                <input type="text" name="assunto" id="assunto" placeholder="Digite o assunto..." required>

                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" placeholder="Digite a sua mensagem aqui..." required></textarea>

                <button class="btn-enviar" type="submit">Enviar Mensagem</button>
            </form>
        </section>
    </main>

    <?php require_once('template/footer.php') ?>

</body>

</html>
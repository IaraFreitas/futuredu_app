<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body id="index_esqueceu-senha" class="body_esqueceu-senha">

    <section class="login-container">
        <h2>Redefinir Senha</h2>

        <h3>Informe o seu e-mail para enviarmos o link de redefinição.</h3>


        <form onsubmit="enviarEmail(event)">
            <!-- <label for="email">E-mail</label> -->
            <input type="email" name="email" id="email" placeholder="Digite o seu e-mail" data-tts="digite o seu email" required>

            <button class="btn-login" type="submit" data-tts="enviar">Enviar</button>
            <p id="mensagem" class="mensagem-sucesso" style="display: none;">
                ✅ Link de redefinição de senha enviado para seu e-mail.
            </p>
        </form>

        <!-- <div class="links">
        <img src="assets/img/icon/seta-voltar.png" alt="icon de seta" width="50px" height="50px">
            <a href="#"> voltar para o Login</a>
        </div> -->
        <div class="links voltar">
            <a href="<?= URL_BASE; ?>index.php?url=login">
                <i class="bi bi-box-arrow-left" data-tts="voltar para o login"></i>
                voltar para o Login
            </a>
        </div>


    </section>

    <script src="assets/js/script.js"></script>

</body>

</html>
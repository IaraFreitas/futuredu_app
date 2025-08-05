<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <!-- TAG's essenciais para tratar a responsividade em diferentes aparelhos  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuturEdu - <?= $titulo; ?> </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body id="index_login" class="body_index">

    <section class="login-container">
        <div class="logo">
            <!-- Substitua "logo.png" pela imagem real se desejar -->
            <img src="assets/img/logo/logo-futuedu-preto.svg" alt="FuturEdu Logo">
        </div>
        <h2>Login do Aluno</h2>

        <form method="post" action="<?= URL_BASE; ?>index.php?url=menu">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" data-tts="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" data-tts="senha" required>

            <button class="btn-login" type="submit" data-tts="entrar">Entrar</button>
        </form>

        <div class="links">
            <a href="<?= URL_BASE; ?>index.php?url=esqueceuSenha" data-tts='esqueceu a senha'>Esqueceu a senha?</a>
            <a href="<?= URL_BASE; ?>index.php?url=cadastrar" data-tts="cadastrar-se">Cadastrar-se</a>
        </div>
    </section>

    <script src="assets/js/script.js">     </script>
</body>

</html>
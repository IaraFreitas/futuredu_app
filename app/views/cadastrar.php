<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('template/head.php') ?>

<body id="index_menu" class="body-cadastrar">

    <?php require_once('template/header.php') ?>

    <main class="main-menu">

        <section class="titulo">
            <a href="index.php" class="voltar">
                <i class="bi bi-box-arrow-left"></i>
            </a>
            <h2> Cadastre-se</h2>
        </section>
        <section>
            <div class="foto-padrao"><img src="assets/img/aluno/sem-foto.jpg" alt="foto do aluno"></div>

            <div>
                <form method="post" action="<?= URL_BASE; ?>index.php?url=login">
                    <label for="nome_completo">Nome Completo:</label>
                    <input type="text" id="nome_completo" name="nome_completo" placeholder="Digite seu nome completo" required>

                    <label for="nome_social">Nome Social:</label>
                    <input type="text" id="nome_social" name="nome_social" placeholder="(Opcional)">

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>

                    <label for="rg">RG:</label>
                    <input type="text" id="rg" name="rg" placeholder="Digite seu RG">

                    <label for="data_nascimento">Data de nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha segura" required>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(00) 0000-0000">

                    <label for="celular">Celular:</label>
                    <input type="tel" id="celular" name="celular" placeholder="(00) 90000-0000" required>

                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" placeholder="00000-000" required>

                    <label for="endereco">Endereço:</label>
                    <textarea id="endereco" name="endereco" rows="2" placeholder="Rua, avenida, etc."></textarea>

                    <label for="numero">Número:</label>
                    <input type="text" id="numero" name="numero" placeholder="Nº da residência">

                    <label for="complemento">Complemento:</label>
                    <input type="text" id="complemento" name="complemento" placeholder="Apartamento, bloco...">

                    <label for="responsavel">Responsável:</label>
                    <input type="text" id="responsavel" name="responsavel" placeholder="Nome do responsável legal">

                    <label for="telefone_responsavel">Telefone Responsável:</label>
                    <input type="tel" id="telefone_responsavel" name="telefone_responsavel" placeholder="(00) 0000-0000">

                    <label for="telefone_emergencia">Telefone:</label>
                    <input type="tel" id="telefone_emergencia" name="telefone_emergencia" placeholder="Número para emergências">

                    <label for="email_responsavel">E-mail:</label>
                    <input type="email" id="email_responsavel" name="email_responsavel" placeholder="Email do responsável">

                    <button type="submit" class="btn-login">Salvar Alterações</button>
                </form>

            </div>

        </section>

    </main>

    <?php require_once('template/footer.php') ?>


    //* SCRIPT NECESSÁRIO PARA BUSCAR O ENDEREÇO PELO CEP INFORMADO PELO CLIENTE *
   <script src="assets/js/script.js"></script>

</body>

</html>
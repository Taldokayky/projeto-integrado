<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catevento | Cadastro</title>
    <link rel="stylesheet" href="arquivos-css/cadastro.css">
    <link rel="stylesheet" href="arquivos-css/animacoes.css">
    <link rel="stylesheet" href="arquivos-css/medias-cadastro.css">
    <link rel="shortcut icon" href="imagens/logo.png" type="image/png">
    <script src="https://kit.fontawesome.com/05ac79b2f0.js" crossorigin="anonymous"></script>
</head>
<body>
    <main id="main">
        <article id="article-login">
            <button id="btnDarkMode"><i class="fa-solid fa-moon"></i></button>
            <a href="#" id="voltar-pagina-principal"><i class="fa-solid fa-arrow-left"></i><span id="span-voltar">Página principal</span></a>
            <a href="#"><img src="imagens/logo.png" alt="logo catevento" id="logo" title="Voltar para a página principal."></a>
            <h1 class="login-title">Já possui uma conta?</h1>
            <p id="login-paragrafo">Acesse agora mesmo :)</p>
            <a href="./arquivos-php/Login.php" id="btn-login">Entrar</a>
        </article>
        <article id="article-registrar">
            <form action="./arquivos-php/Backcadastro.php" id="form-registro" method="POST" onsubmit="return validarFormulario()">
                <h2 id="subtitulo-login" class="text-dark-mode">Crie sua conta</h2>
                <p id="paragrafo-login" class="text-dark-mode">Preencha seus dados</p>
                <div id="input-nome">
                    <i class="fa-solid fa-user icones-input iconeNome"></i>
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" class="inputs-dark-mode">
                    <p id="error-nome" class="paragrafo-erro-display">Preencha seu nome.</p>
                </div>
                <div id="input-email">
                    <i class="fa-solid fa-envelope icones-input iconeEmail"></i>
                    <input type="email" name="Email" id="email" placeholder="exemplo@gmail.com" class="inputs-dark-mode">
                    <p id="error-email" class="paragrafo-erro-display">Verifique se seu email foi preenchido corretamente.</p>  
                </div>
                <div id="input-senha">
                    <i class="fa-solid fa-lock icones-input iconeSenha"></i>
                    <input type="password" name="Senha" id="senha" placeholder="Senha" minlength="6" autocomplete="on" class="inputs-dark-mode">
                    <i class="fa-solid fa-eye displayIcone" id="iconeVisualizarSenha"></i>
                    <i class="fa-solid fa-eye-slash displayIcone" id="iconeEsconderSenha"></i>
                    <p id="error-senha" class="paragrafo-erro-display">Sua senha precisa ter no mínimo 6 caracteres.</p>                 
                </div>
                <button type="submit" id="btn-registrar">Cadastrar</button>
            </form>
        </article>
    </main>
    <script src="arquivos-js/dark-mode.js"></script>
    <script src="arquivos-js/cadastro.js"></script>
</body>
</html>

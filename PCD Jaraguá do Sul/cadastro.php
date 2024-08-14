<?php

include("conexao.inc");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$cadastroCliente = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$message = "";
$link = "";
if (mysqli_query($conect, $cadastroCliente)) {
    $message = "Cadastro realizado com sucesso!";
    $link = "<a href='index.html' class='button-login'>Ir para login</a>";
} else {
    $message = "Erro ao cadastrar usuário.";
    $link = "<a href='cadastro.html' class='button-login'>Voltar</a>";
}

mysqli_close($conect);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icon.ico">
    <link rel="stylesheet" href="index.css">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            padding: 30px;
            background-color: #ffffff;
            border: 2px solid #2457a3;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .button-login {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #2457a3;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            border: 2px solid #2457a3;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .button-login:hover {
            background-color: #ffffff;
            color: #2457a3;
            border-color: #2457a3;
        }
    </style>
</head>
<body>
<div class="menu-superior">
            <a href="index.html">
                <img src="logo.png" alt="Logo" class="logo">
            <div class="menu-container">
                <ul class="menu-central">
                    <li><a href="sobre.html">Sobre Nós</a></li>
                    <li><a href="parcerias.html">Parcerias</a></li>
                    <li><a href="benefícios.html">Benefícios</a></li>
                </ul>
            </div>
            <div class="botoes-container">
                <a href="entrar.html" class="botao-entrar">Entrar</a>
                <a href="cadastro.html" class="botao-cadastrar">Cadastrar</a>
            </div>
        </div>
    <div class="container">
        <div class="message">
            <?php echo $message; ?>
        </div>
        <?php echo $link; ?>
    </div>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>

    <footer>
        <img src="Logo Branca.png" alt="Logo do Site" class="logobranca">
        <p>&copy; 2024 Portal PCD. Todos os direitos reservados.</p>
    <a href="https://x.com/govbr">
        <img src="x.png" alt="Logo do Site" class="x">
    </a>
    <a href="https://www.whatsapp.com/channel/0029Va2zbqm7dmeR3lddrp38">
        <img src="whatsapp.png" alt="wpp" class="whatsapp">
    </a>
    <a href="https://www.instagram.com/governodobrasil/">
        <img src="instagram.png" alt="ig" class="instagram">
    </a>
    </footer>
</body>
</html>
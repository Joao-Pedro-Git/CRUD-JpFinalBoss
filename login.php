<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Reset básico para margem e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            /* Altere para sua fonte preferida */
            background-color: #f4f4f4;
            /* Cor de fundo clara */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Altura total da tela */
        }

        .container {
            background-color: #fff;
            /* Cor de fundo do formulário */
            border-radius: 8px;
            /* Cantos arredondados */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            /* Sombra suave */
            padding: 20px;
            width: 300px;
            /* Largura do formulário */
        }

        h2 {
            text-align: center;
            /* Centraliza o título */
            color: #333;
            /* Cor do texto do título */
            margin-bottom: 20px;
            /* Espaçamento abaixo do título */
        }

        .form-group {
            margin-bottom: 15px;
            /* Espaçamento abaixo de cada campo */
        }

        label {
            display: block;
            /* Para que o label ocupe toda a linha */
            margin-bottom: 5px;
            /* Espaçamento abaixo do label */
            font-weight: bold;
            /* Negrito no texto do label */
            color: #555;
            /* Cor do texto do label */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            /* Largura total do campo */
            padding: 10px;
            /* Espaçamento interno do campo */
            border: 1px solid #ccc;
            /* Borda padrão */
            border-radius: 5px;
            /* Cantos arredondados */
            font-size: 16px;
            /* Tamanho da fonte */
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            /* Cor da borda ao focar */
            outline: none;
            /* Remove o contorno padrão */
        }

        button {
            background-color: #007bff;
            /* Cor do botão */
            color: white;
            /* Cor do texto do botão */
            padding: 10px;
            /* Espaçamento interno do botão */
            border: none;
            /* Remove a borda padrão */
            border-radius: 5px;
            /* Cantos arredondados */
            cursor: pointer;
            /* Muda o cursor ao passar o mouse */
            width: 100%;
            /* Largura total do botão */
            font-size: 16px;
            /* Tamanho da fonte */
        }

        button:hover {
            background-color: #0056b3;
            /* Cor do botão ao passar o mouse */
        }

        .alert {
            color: red;
            /* Cor do texto de alerta */
            text-align: center;
            /* Centraliza o texto de alerta */
            margin-top: 10px;
            /* Espaçamento acima do alerta */
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <?php
        session_start();
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Defina suas credenciais de login
            $valid_username = 'admin'; // Altere para o seu usuário
            $valid_password = 'senha123'; // Altere para a sua senha
        
            // Verifica as credenciais
            if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
                $_SESSION['loggedin'] = true; // Define a sessão de login
                header('Location: index.php'); // Redireciona para a página principal
                exit;
            } else {
                echo "<p class='alert alert-danger'>Usuário ou senha incorretos!</p>";
            }
        }
        ?>
    </div>
</body>

</html>
<?php
include_once('../conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $usuario = $_POST['username'];
        $senha = $_POST['password'];

        // Verificar no banco de dados se o usuário e senha são válidos
        $sql = "SELECT * FROM cadastro WHERE username = ? AND user_password = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $usuario, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Login bem-sucedido
            header('location: ../index.php');
            exit();
        } else {
            echo '<script>alert("Usuário ou senha incorretos. Tente novamente.");</script>';
        }

        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="assets/funções.js"></script>
    <title>Fedex - login</title>
</head>
<body>
    <header>
        <div class="logo"><a href=".html/index.php">Fedex</a></div>
        <nav class="navbar">
            <div class="menu-toggle">&#9776;</div>
            <ul class="menu">
                <li><a href=".html/index.php">Home</a></li>
                <li><a href=".html/suporte.php">Suporte</a></li>
                <li><a href=".html/login.php">Login</a></li>
                <li><a href=".html/sobre.php">Sobre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="title">
            <h1>Digite seu e-mail e senha para<br> fazer seu login</h1>
        </div>

        <div class="sub-title">
            <h2>Insira seus detalhes abaixo para criar sua conta.</h2>
        </div>

        <div class="login-form">
            <h2>Login</h2>
            <form action="#" method="post">
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" name="login-email" required>

                <label for="login-password">Senha:</label>
                <input type="password" id="login-password" name="login-password" required>

                <button type="submit" onclick="enviarFormulario()">Entrar</button>
            </form>

            <p class="switch-form">Ainda não tem uma conta? <a href="#" onclick="toggleForm('signup-form')">Cadastre-se</a></p>
        </div>

        <div class="signup-form" style="display: none;">
            <h2>Cadastro</h2>
            <form action="#" method="post">
                <label for="signup-name">Nome:</label>
                <input type="text" id="signup-name" name="signup-name" required>

                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" name="signup-email" required>

                <label for="signup-password">Senha:</label>
                <input type="password" id="signup-password" name="signup-password" required>

                <button type="submit" onclick="enviarFormulario()">Cadastrar</button>
            </form>

            <p class="switch-form">Já tem uma conta? <a href="#" onclick="toggleForm('login-form')">Faça login</a></p>
        </div>
    </main>

    <footer>
        <div class="footer-section">
            <div>
                <h3>Informações da Empresa</h3>
                <p>Sobre a FedEx</p>
            </div>
            <div>
                <h3>Alguma Dúvida?</h3>
                <p>Fale com nossa IA</p>
            </div>
            <div>
                <h3>Suporte ao Cliente</h3>
                <p>Escreva para a FedEx</p>
            </div>
            <div>
                <a href="#" class="button">Pergunte à FedEx</a>
            </div>
        </div>
        <div class="footer-section">
            <h3>Siga a FedEx</h3>
            <div class="social-icons">
                <a href="#" class="social-icon"><img src="assets/img/facebook.png" alt="Facebook"></a>
                <a href="#" class="social-icon"><img src="assets/img/youtube.png" alt="YouTube"></a>
                <a href="#" class="social-icon"><img src="assets/img/instagram.png" alt="Instagram"></a>
                <a href="#" class="social-icon"><img src="assets/img/linkedin.png" alt="LinkedIn"></a>
            </div>
        </div>
    </footer>
</body>
</html>

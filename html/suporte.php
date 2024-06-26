<?php
include_once('../conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem);
    $stmt->execute();
    $stmt->close();
}
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fedex - suporte</title>
    <link rel="stylesheet" href="assets/css/suporte.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="assets/funções.js"></script>
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
        <div class="titulo">
            <h1>SUPORTE AO CLIENTE</h1>
        </div>

        <div class="subtitulo">
            <h2>Algum problema? Fale conosco</h2>
        </div>

        <div class="quadrado-principal">
            <div class="quadrado1">
                <input type="text" id="nome" placeholder="Nome:">
            </div>
            <div class="quadrado2">
                <input type="email" name="" id="email" placeholder="E-mail:">
            </div>
            <div class="quadrado3">
                <input type="text" id="mensagem" placeholder="Digite sua mensagem:">
            </div>
            <div class="enviar">
                <button onclick="enviarFormulario()">Enviar</button>
            </div>
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
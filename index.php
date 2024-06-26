<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fedex - home</title>
    <link rel="stylesheet" href="assets/css/home.css">
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
        <section class="imagem">
            <img src="assets/img/empresa-de-transporte.png" alt="Meios de transporte da empresa.">
            <div class="botoes">
                <button class="botao-tarifas">TARIFAS E TEMPO</button>
                <button class="botao-rastreamento">RASTREAR</button>
                <button class="botao-enviar">ENVIAR</button>
                <div class="campo-rastreamento">
                    <input type="text" placeholder="ID de Rastreamento:">
                    <button class="botao-rastrear-id">RASTREAR</button>
                </div>
            </div>
        </section>

        <div class="banner">
            <p id="paragrafo-banner">
                Expanda seus negócios com mais opções de prazo de entrega
                Os serviços FedEx® Priority Timed Option oferecem velocidade, 
                cobertura e recursos aprimorados para um serviço mais rápido
                para mais destinos ao redor do mundo.
            </p>
            <div class="botao-banner">
                <button class="botao">SAIBA MAIS</button>
            </div>
        </div>
        
        <div class="title">
            <h1>Mais sobre a FEDEX</h1>
        </div>

        <div class="sub-title">
            <h2>Você pode confiar na FedEx, pois temos as soluções certas para suas necessidades nacionais,de importação ou exportação, pacotes pesados ou leves e remessas urgentes ou nem tanto.</h2>
        </div>

        <div class="imagens-container">
            <div class="imagem-item">
                <img src="assets/img/home-img2.png" alt="Trabalhadores da fedex." style="width: 350px; height: 232.847px;">
                <h4 class="h-title">Novo na FedEx?</h4>
                <p class="legenda-1">Nosso novo Centro de Clientes orienta você pelas etapas necessárias para realizar envios com a FedEx.</p>
                <h4 class="h-title">NÓS AJUDAMOS</h4>
            </div>
            <div class="imagem-item">
                <img src="assets/img/home-img3.png" alt="Trabalhadores da fedex." style="width: 350px; height: 232.847px;">
                <h4 class="h-title">Abra uma conta</h4>
                <p class="legenda-2">Aproveite nossos serviços e soluções criados para atender às suas necessidades de remessa. Registre-se para abrir uma conta de remessa FedEx a seguir. Vamos começar!</p>
                <h4 class="h-title">FAÇA SUA CONTA</h4>
            </div>
            <div class="imagem-item">
                <img src="assets/img/home-img.png" alt="Trabalhadores da fedex." style="width: 350px; height: 232.847px;">
                <h4 class="h-title">Serviços de remessa</h4>
                <p class="legenda-3">Escolha a FedEx para entregar remessas importantes e urgentes, com origem e destino em mais de 220 países e territórios ao redor do mundo. A FedEx possui o serviço de que você precisa, incluindo importação ou exportação, remessas expressas ou menos urgentes e pacotes pequenos ou pesados.</p>
                <h4 class="h-title">CONHEÇA AS FERRAMENTAS DE ENVIO</h4>
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
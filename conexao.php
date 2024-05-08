<?php
// Substitua as informações do banco de dados pelos seus próprios dados
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fedex_support";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>

<?php
// config.php - Configuração de conexão com o banco de dados
// Substitua os valores abaixo pelos dados do seu hosting

// Configurações do banco de dados
define('DB_HOST', 'localhost'); // Mude para o host do seu servidor
define('DB_USER', 'root'); // Seu usuário MySQL
define('DB_PASS', ''); // Sua senha MySQL
define('DB_NAME', 'pcfusion2.0'); // Nome do seu banco de dados

// Criar conexão
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Definir charset para UTF-8
$conn->set_charset("utf8mb4");

// Variáveis globais do site
define('SITE_NAME', 'PC Fusion');
define('SITE_URL', 'http://seu-dominio.com/'); // Mude para a URL do seu site
define('UPLOAD_DIR', 'uploads/');

?>

<?php
// teste_conexao.php - Teste rápido da conexão com o banco de dados
// Acesse http://seu-dominio.com/teste_conexao.php

echo "<h1>Teste de Conexão - PC Fusion</h1>";
echo "<hr>";

// Tentar incluir config.php
try {
    require_once 'config.php';
    echo "<p style='color: green;'><strong>✓ config.php carregado com sucesso</strong></p>";
} catch (Exception $e) {
    echo "<p style='color: red;'><strong>✗ Erro ao carregar config.php:</strong> " . $e->getMessage() . "</p>";
    exit;
}

// Teste de conexão
echo "<h2>Teste de Conexão MySQL:</h2>";

if ($conn->connect_error) {
    echo "<p style='color: red;'><strong>✗ Erro de conexão:</strong> " . $conn->connect_error . "</p>";
    exit;
} else {
    echo "<p style='color: green;'><strong>✓ Conectado ao MySQL com sucesso!</strong></p>";
}

// Teste do banco de dados
echo "<h2>Informações do Banco:</h2>";
echo "<p>Host: " . DB_HOST . "</p>";
echo "<p>Banco: " . DB_NAME . "</p>";
echo "<p>Usuário: " . DB_USER . "</p>";

// Verificar tabelas
echo "<h2>Verificação de Tabelas:</h2>";

$tables = ['categorias', 'pecas', 'videos', 'desenvolvedores'];

foreach ($tables as $table) {
    $result = $conn->query("SHOW TABLES LIKE '$table'");
    if ($result->num_rows > 0) {
        // Contar registros
        $count_result = $conn->query("SELECT COUNT(*) as total FROM $table");
        $row = $count_result->fetch_assoc();
        echo "<p style='color: green;'><strong>✓ Tabela '$table':</strong> " . $row['total'] . " registros</p>";
    } else {
        echo "<p style='color: red;'><strong>✗ Tabela '$table' não encontrada!</strong></p>";
    }
}

echo "<hr>";
echo "<p><strong>Se todos os testes passaram, está tudo pronto!</strong></p>";
echo "<p><a href='index.php'>Voltar para a Home</a></p>";

?>

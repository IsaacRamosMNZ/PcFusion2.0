<?php
require_once 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$page_title = 'Admin';
$style_file = 'style.css';

// Verificar se tem uma senha (segurança mínima)
$admin_password = 'admin123'; // MUDE ISSO! Use uma senha segura
$authenticated = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_password'])) {
    if ($_POST['login_password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        $authenticated = true;
    } else {
        $error = 'Senha incorreta!';
    }
}

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    $authenticated = true;
}

if (!$authenticated) {
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin - PC Fusion</title>
        <style>
            body { font-family: Arial; background: #f0f0f0; padding: 40px; }
            .login-box { background: white; padding: 40px; max-width: 400px; margin: 50px auto; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .login-box h1 { text-align: center; color: #191128; }
            .error { color: red; background: #ffebee; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
            input { width: 100%; padding: 10px; margin: 10px 0; border: 2px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; }
            button { width: 100%; padding: 10px; background: #ff9100; color: white; border: none; border-radius: 5px; font-size: 1.1rem; font-weight: 600; cursor: pointer; }
            button:hover { background: #2d0036; }
            @media (max-width: 520px) {
                body { padding: 16px; }
                .login-box { margin: 20px auto; padding: 24px; }
            }
        </style>
    </head>
    <body>
        <div class="login-box">
            <h1>🔐 Admin - PC Fusion</h1>
            <?php if(isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <form method="POST">
                <input type="password" name="login_password" placeholder="Digite a senha do admin" required autofocus>
                <button type="submit">Entrar</button>
            </form>
            <p style="text-align: center; margin-top: 20px;">
                <a href="index.php">Voltar para Home</a>
            </p>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Processamento de formulários
$message = '';
$message_type = 'success';

// Adicionar peça
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_peca') {
    $categoria_id = intval($_POST['categoria_id']);
    $nome = $conn->real_escape_string($_POST['nome']);
    $descricao = $conn->real_escape_string($_POST['descricao']);
    $especificacoes = $conn->real_escape_string($_POST['especificacoes']);
    
    $query = "INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES ($categoria_id, '$nome', '$descricao', '$especificacoes')";
    if ($conn->query($query)) {
        $message = 'Peça adicionada com sucesso!';
    } else {
        $message = 'Erro ao adicionar: ' . $conn->error;
        $message_type = 'error';
    }
}

// Deletar peça
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete_peca') {
    $id = intval($_POST['peca_id']);
    $query = "DELETE FROM pecas WHERE id = $id";
    if ($conn->query($query)) {
        $message = 'Peça deletada com sucesso!';
    } else {
        $message = 'Erro ao deletar: ' . $conn->error;
        $message_type = 'error';
    }
}

// Buscar dados
$categorias = [];
$result = $conn->query("SELECT * FROM categorias ORDER BY ordem");
while($row = $result->fetch_assoc()) {
    $categorias[] = $row;
}

$pecas = [];
$result = $conn->query("SELECT p.*, c.nome as categoria_nome FROM pecas p JOIN categorias c ON p.categoria_id = c.id ORDER BY c.ordem, p.nome");
while($row = $result->fetch_assoc()) {
    $pecas[] = $row;
}

include 'header.php';
?>

<main class="admin-page">
    <h2>🛠️ Painel Admin - PC Fusion</h2>
    
    <?php if($message): ?>
    <div class="admin-message <?php echo $message_type === 'success' ? 'success' : 'error'; ?>">
        <?php echo htmlspecialchars($message); ?>
    </div>
    <?php endif; ?>

    <div class="admin-grid">
        <!-- Adicionar Peça -->
        <div class="admin-panel">
            <h3>➕ Adicionar Peça</h3>
            <form method="POST" class="admin-form">
                <input type="hidden" name="action" value="add_peca">
                
                <label>Categoria:</label>
                <select name="categoria_id" required>
                    <option value="">Selecione</option>
                    <?php foreach($categorias as $cat): ?>
                    <option value="<?php echo $cat['id']; ?>"><?php echo htmlspecialchars($cat['nome']); ?></option>
                    <?php endforeach; ?>
                </select>
                
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Nome da peça" required>
                
                <label>Descrição:</label>
                <textarea name="descricao" placeholder="Descrição"></textarea>
                
                <label>Especificações:</label>
                <input type="text" name="especificacoes" placeholder="Ex: Socket: LGA1700, 24 Núcleos">
                
                <button type="submit" class="admin-submit">Adicionar</button>
            </form>
        </div>

        <!-- Informações Rápidas -->
        <div class="admin-panel">
            <h3>📊 Estatísticas</h3>
            <?php
            $stats_query = "SELECT c.nome, COUNT(p.id) as total FROM categorias c LEFT JOIN pecas p ON c.id = p.categoria_id GROUP BY c.id ORDER BY c.ordem";
            $stats_result = $conn->query($stats_query);
            ?>
            <ul class="admin-stats">
                <?php while($stat = $stats_result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($stat['nome']); ?>:</strong> <?php echo $stat['total']; ?> peças
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>

    <!-- Lista de Peças -->
    <div class="admin-panel admin-table-panel">
        <h3>📦 Peças Cadastradas</h3>
        
        <?php if(count($pecas) > 0): ?>
        <div class="admin-table-wrap">
        <table class="admin-table">
            <tr>
                <td>Categoria</td>
                <td>Nome</td>
                <td>Especificações</td>
                <td>Ação</td>
            </tr>
            <?php foreach($pecas as $peca): ?>
            <tr>
                <td><?php echo htmlspecialchars($peca['categoria_nome']); ?></td>
                <td><?php echo htmlspecialchars($peca['nome']); ?></td>
                <td>
                    <small><?php echo htmlspecialchars(substr($peca['especificacoes'] ?? '', 0, 50)); ?></small>
                </td>
                <td>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="action" value="delete_peca">
                        <input type="hidden" name="peca_id" value="<?php echo $peca['id']; ?>">
                        <button type="submit" onclick="return confirm('Confirmar deleção?');" class="admin-delete">Deletar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <?php else: ?>
        <p>Nenhuma peça cadastrada.</p>
        <?php endif; ?>
    </div>

    <div class="admin-home-link">
        <a href="index.php">Voltar para Home</a>
    </div>
</main>

<?php include 'footer.php'; ?>

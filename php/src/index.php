<?php
$host = 'mysql';
$db   = 'projeto_db';
$user = 'root';
$pass = 'root_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    // Criar tabela se não existir
    $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL
    )");
    
    // Inserir um novo usuário (exemplo)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
        $stmt->execute([$_POST['nome'], $_POST['email']]);
    }
    
    // Buscar todos os usuários
    $stmt = $pdo->query("SELECT * FROM usuarios");
    $usuarios = $stmt->fetchAll();
    
    // HTML para exibir e adicionar usuários
    ?>
    <h1>Gerenciamento de Usuários</h1>
    
    <h2>Adicionar Novo Usuário</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Adicionar</button>
    </form>
    
    <h2>Usuários Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= htmlspecialchars($usuario['nome']) ?></td>
            <td><?= htmlspecialchars($usuario['email']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php
    
} catch (\PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
} 
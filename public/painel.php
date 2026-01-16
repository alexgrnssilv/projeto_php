
<?php
session_start();

require "../includes/functions.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: formLogin.php");
    exit;
}

$fileName = "../dados/tarefas.json";
$tarefas = lerDados($fileName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Listagem de Tarefas</title>
</head>
<body>
    <div class="container">
    <h1>Minhas Tarefas</h1>

<div class="actions-top">
    <a href="formTarefa.php" class="btn-primary">➕ Nova tarefa</a>
    <a href="../actions/logout.php" class="btn-secondary">Sair</a>
</div>

<div class="task-list">
    <?php foreach ($tarefas as $t): ?>
        <?php if ($t['email_usuario'] === $_SESSION['usuario']['email']): ?>
            <div class="task-item">
                <h3><?= htmlspecialchars($t['titulo']) ?></h3>
                <p><?= nl2br(htmlspecialchars($t['descricao'])) ?></p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

    </ul>
</div>
</body>
</html>
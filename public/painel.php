
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
    <title>Listagem de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

   <a href="formTarefa.php">Criar Tarefa</a><br><br>
    <a href="../actions/logout.php">Desconectar</a>
    
    <ul>
        <?php foreach($tarefas as $t){ 
            if ($t['email_usuario'] === $_SESSION['usuario']['email']) {
                ?>

                <li><strong><?= $t['titulo'] ?></strong></li>
                <li><?= $t['descricao'] ?></li>
        <?php
            }
        } ?>
    </ul>
</body>
</html>
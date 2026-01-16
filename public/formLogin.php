<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Login</h1>

    <?php if (!empty($_SESSION['erro_login'])): ?>
        <div class="alert error"><?= $_SESSION['erro_login']; ?></div>
    <?php unset($_SESSION['erro_login']); endif; ?>

    <?php if (!empty($_SESSION['erro_usuario'])): ?>
        <div class="alert error"><?= $_SESSION['erro_usuario']; ?></div>
    <?php unset($_SESSION['erro_usuario']); endif; ?>

    <form action="../actions/login.php" method="post">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" value="Entrar">
    </form>

    <a href="formCadastroUsuario.php">Criar conta</a>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Faça o Login</h1>

    <form action="../actions/login.php" method="post">
        <input type="email" name="email" placeholder="E-mail"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
    <a href="formCadastroUsuario.php">Criar conta</a>
</body>
</html>
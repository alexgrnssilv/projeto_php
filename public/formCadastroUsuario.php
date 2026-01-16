<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastrar Novo Usuário</h1>

    <form action="../actions/cadastroUsuarios.php" method="post">
        <input type="text" name="nome" placeholder="Nome"><br><br>

        <input type="email" name="email" placeholder="Email"><br><br>

        <input type="password" name="senha" placeholder="Senha"><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
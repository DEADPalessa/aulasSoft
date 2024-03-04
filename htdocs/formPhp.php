<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <form action="validaForm.php" method="post">
        <p>Usuário: <input type="text" name="usuario"> </p>
        <p>Senha: <input type="password" name="senha"> </p>
        <button type="submit">Acessar</button>
    </form>
    
    <a href="readUser.php" target="_blank"> Vizualizar Usuários</a>
</body>
</html>
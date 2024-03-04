<?php

$id = $_GET["id"]; //obtendo variavel passada pela URL

$host = 'localhost';
$dbname = 'base_usuarios';
$user = 'root';
$password = 'mysql2024';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM table_users"); //query
    $query->execute();
    //$reuslt = $query->fetch(PDO::FETCH_OBJ);
    $result = $query->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {
    die("Connection failed: ".$e->getMessage());
 }
 ?>
 -------------------------------------------------------------
 <form action="upd.php" method="post">
        <p>Usuário: <input type="text" name="usuario" value="<?php echo $result->usuarios; ?>"> </p>
        <p>Senha: <input type="password" name="senha" value="<?php echo $result->senha; ?>"> </p>
        <button type="submit">Atualizar</button>
    </form>

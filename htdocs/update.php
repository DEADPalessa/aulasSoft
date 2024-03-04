<?php
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
    //var_dump($result);

echo "<table border='1'>";
echo "<tr><th>id</th><th>Usuários</th><th>Senha</th>Alterar<th></th>";

//Loop através dos resultados
foreach ($result as $resultado) {
        echo "<tr>";
        echo "<td>{$resultado->id}</td>";
        echo "<td>{$resultado->usuarios}</td>";
        echo "<td>{$resultado->senha}</td>";
        echo "<td> <a href='change.php?id=$resultado->id'> Alterar </a></td>";
        echo "</tr>";
}
    echo "</table>";
   // echo ("Usuário cadastrado!"); 
} catch (PDOException $e) {
   die("Connection failed: ".$e->getMessage());
}
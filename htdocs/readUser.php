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
    $reuslt = $query->fetchALL(PDO::FETCH_OBJ);
    //var_dump($reuslt);

echo "<table border='1'>";
echo "<tr><th>id</th><th>Usuários</th><th>Senha</th>";

//Loop através dos resultados
foreach ($reuslt as $reusltado){
        echo "<tr>";
        echo "<td>{$reusltado ->id}</td>";
        echo "<td>{$reusltado ->usuarios}</td>";
        echo "<td>{$reusltado ->senha}</td>";
        echo "</tr>";
}
    echo "</table>";
   // echo ("Usuário cadastrado!"); 
} catch (PDOException $e) {
   die("Connection failed: ".$e->getMessage());
}
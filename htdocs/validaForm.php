<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$host = 'localhost';
$dbname = 'base_usuarios';
$user = 'root';
$password = 'mysql2024';


 try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $pdo->prepare("INSERT INTO table_users VALUES(0,'$usuario','$senha')"); //query
     $query->execute();
     echo ("Usuário cadastrado!"); 
} catch (PDOException $e) {
    die("Connection failed: ".$e->getMessage());
 }
//echo "Usuários:{$usuario} - Senha:{$senha}";
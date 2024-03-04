<?php
$id = $_GET['id'];


$host = 'localhost';
$dbname = 'base_usuarios';
$user = 'root';
$password = 'mysql2024';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("DELETE FROM table_users WHERE id=$id"); //query
    $query->execute();
    echo "Linha deletada com sucesso!";
} catch (PDOException $e) {
    die("Connection failed: ".$e->getMessage());
 }
<!DOCTYPE html>
<html>
<head>
    <title>PHP Apache 2.4</title>
</head>
<body>
    <h1>Hello, PHP Apache 2.4!</h1>
   
    <?php
    $host = 'localhost';
    $dbname = 'baseteste';
    $user = 'root';
    $password = 'mysql2024';


    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>Connected to MySQL successfully!</p>";
    } catch (PDOException $e) {
        die("Connection failed: ".$e->getMessage());
    }
    ?>
</body>
</html>
<?php
  
    $host = 'localhost';
    $db_name = 'testehbi';
    $username = 'root'; // Altere se necessário
    $password = '';     // Altere se necessário

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
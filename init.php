<?php
    $host = 'localhost';
    $username = 'root'; // Altere se necessário
    $password = '';     // Altere se necessário

    try {
        // Conecta ao MySQL sem selecionar banco ainda
        $pdo = new PDO("mysql:host=$host", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Cria o banco de dados se não existir
        $pdo->exec("CREATE DATABASE IF NOT EXISTS testehbi CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        echo "Banco de dados 'testehbi' criado com sucesso!.<br>";

        // Conecta agora ao banco recém-criado
        $pdo->exec("USE testehbi");

        // Cria a tabela posts se não existir
        $createTableSQL = "
            CREATE TABLE IF NOT EXISTS posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content TEXT NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ";
        $pdo->exec($createTableSQL);
        echo "Tabela 'posts' criada com sucesso!.<br>";

    } catch (PDOException $e) {
        die("Erro: " . $e->getMessage());
    }

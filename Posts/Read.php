<?php

    require_once "../Config/Database.php";

    $id = isset($_GET['id']) ? intval($_GET['id']) : null;

    if ($id) {
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($post ?: ["message" => "Post não encontrado."]);
    } else {
        $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($posts);
    }
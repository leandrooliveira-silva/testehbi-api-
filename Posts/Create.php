<?php

    require_once '../Config/Database.php';


    $data = json_decode(file_get_contents("php://input"));

    if (!empty($data->title) && !empty($data->content)) {
        $stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        if ($stmt->execute([$data->title, $data->content])) {
            echo json_encode(["message" => "Post criado com sucesso!"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Erro ao criar post."]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Dados incompletos."]);
    }

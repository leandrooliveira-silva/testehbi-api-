<?php

    require_once '../Config/Database.php';

    $data = json_decode(file_get_contents("php://input"));

    if (!empty($data->id) && !empty($data->title) && !empty($data->content)) {
        $stmt = $pdo->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
        if ($stmt->execute([$data->title, $data->content, $data->id])) {
            echo json_encode(["message" => "Post atualizado com sucesso!"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Erro ao atualizar post."]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Dados incompletos."]);
    }


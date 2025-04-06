<?php
    
    require_once '../Config/Database.php';

    $data = json_decode(file_get_contents("php://input"));

    if (!empty($data->id)) {
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
        if ($stmt->execute([$data->id])) {
            echo json_encode(["message" => "Post deletado com sucesso!"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Erro ao deletar post."]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "ID não fornecido."]);
    }

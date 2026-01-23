<?php

namespace App\Controller;



class QuestionnaireController
{
    public function showQuest()
    {
        require_once '../app/view/auth/questionnaire.view.php';
    }

    public function store()
{
    header('Content-Type: application/json');

    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode([
        'success' => true,
        'data' => $data
    ]);
}
    }

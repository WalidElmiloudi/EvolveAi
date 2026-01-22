<?php

namespace App\Controller;

use App\Model\Profile;
use App\Model\Skill;

class QuestionnaireController
{
    public function showQuest()
    {
        require_once '../app/view/auth/questionnaire.view.php';
    }

    public function store()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['success' => false]);
            return;
        }

        $data = json_decode(file_get_contents('php://input'), true);

        if (!$data) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid JSON']);
            return;
        }

        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            http_response_code(401);
            echo json_encode(['success' => false, 'message' => 'Unauthorized']);
            return;
        }

        try {
            $db = Database::connect();
            $db->beginTransaction();

            $profileModel = new Profile($db);
            $profileId = $profileModel->create($data, $userId);

            $skillModel = new Skill($db);

            $levelMap = [
                'beginner' => 1,
                'intermediate' => 2,
                'advanced' => 3
             ];
            $level = $levelMap[$data['experience']] ?? 1;

            foreach ($data['skills'] as $skill) {
                $skillModel->add($skill, $level, $userId);
            }

            $db->commit();

            echo json_encode(['success' => true]);

        } catch (\Throwable $e) {
            $db->rollBack();
            http_response_code(500);
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage() // dev only
            ]);
        }
    }
}

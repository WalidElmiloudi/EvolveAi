<?php

namespace App\Controller;

use App\Model\Profile;
use App\Model\Skill;
use App\Core\Database;

class QuestionnaireController
{
    public function showQuest()
    {
        require_once '../app/View/auth/questionnaire.view.php';
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

        $userEmail = $_SESSION['user_email'] ?? null;
        if (!$userEmail) {
            http_response_code(401);
            echo json_encode(['success' => false, 'message' => 'Unauthorized']);
            return;
        }

        $db = Database::getInstance();
        try {
            $db->beginTransaction();

            $profileModel = new Profile($db);
            $profileId = $profileModel->create($data, $userEmail);

            $skillModel = new Skill($db);

            $levelMap = [
                'beginner' => 1,
                'intermediate' => 2,
                'advanced' => 3
             ];
            $level = $levelMap[$data['experience']] ?? 1;

            foreach ($data['skills'] as $skill) {
                $skillModel->add($skill, $level, $userEmail);
            }
            
            $db->commit();

            $_SESSION['toast'] = ['message' => 'Questionnaire est termine !'];
            echo json_encode(['success' => true,
                              'redirect' => '/EvolveAi/auth/showLogin/']);

        } catch (\Throwable $e) {
            $db->rollBack();
            http_response_code(500);
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}

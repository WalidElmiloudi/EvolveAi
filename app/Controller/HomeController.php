<?php

namespace App\Controller;

use App\Core\Controller;
use App\Services\PromptService;
use App\Services\AiService;
use App\Repositories\PlanRepository;

class HomeController extends Controller
{
    public function show()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();

        if (!isset($_SESSION['user']['id'])) {
            $this->view('home'); 
            return;
        }

        $userId = $_SESSION['user']['id'];
        $repo = new PlanRepository();
        $today = date('Y-m-d');

        $todaysPlan = $repo->findPlanByDate($userId, $today);
        $tasks = [];

        if ($todaysPlan) {
            $tasks = $repo->getTasksByPlanId($todaysPlan['id']);
        } else {
            try {
                $promptService = new PromptService();
                $prompt = $promptService->buildJsonPrompt($userId);

                if ($prompt) {
                    $aiService = new AiService();
                    $jsonResponse = $aiService->fetchGeminiResponse($prompt);
                    
                    $cleanJson = str_replace(['```json', '```'], '', $jsonResponse);
                    $generatedTasks = json_decode($cleanJson); 

                    if ($generatedTasks) {
                        $planId = $repo->dailyPlan($userId, "Daily Goal");
                        $repo->saveTasks($planId, $generatedTasks);
                        $tasks = $generatedTasks;
                    }
                }
            } catch (\Exception $e) {

            }
        }

        $this->view('dailyplan', ['tasks' => $tasks]); 
    }
}
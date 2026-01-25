<?php

namespace App\Controller;
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
use App\Core\Controller;
use App\Services\AiService;
use App\Repositories\PlanRepository;

class planController extends Controller
{

        public function store()
        {
                $planRepo = new PlanRepository;

                $tasksClass = new AiService;

                $jsonResponse = $tasksClass->fetchGeminiResponse();
                $tasks = json_decode($jsonResponse , true);

                $plan_id = $planRepo->dailyPlan($_SESSION['user_id'] , 'earnMoney');
                $planRepo->saveTasks($plan_id , $tasks);
        }

        public function getPlan() {
                $planRepo = new PlanRepository;

                $todayPlan = $planRepo->findPlanByDate($_SESSION['user_id'], date('Y-m-d'));

                return $todayPlan['id'] ?? null;
        }

        public function getTasks() {
                $planRepo = new PlanRepository;

                $planId = $this->getPlan();

                $tasks = $planRepo->getTasksByPlanId($planId);

                return $tasks;
        }
        public function showPlan()
        {
            if (!isset($_SESSION['user_id'])) {
                $this->view('auth/login.view');
            } else {
                $this->view('dailyplan.view');
            }
        }
}
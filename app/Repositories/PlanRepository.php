<?php

namespace App\Repositories;

use App\Core\Database;


class PlanRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function dailyPlan($user_id , $goal_summary){
        $sql = "INSERT INTO daily_plan(user_id , goal_summary , completion_rate)
                VALUES(:user_id , :goal_summary , 0)
                RETURNING id";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            'user_id' => $user_id,
            'goal_summary' => $goal_summary
        ]);

        $result = $stmt->fetch();

        return $result['id'];
    }

    public function saveTasks($plan_id , $tasks) {
        $sql = "INSERT INTO task (plan_id, title, description, duration, priority, is_skill_validation) 
                VALUES (:pid, :title, :desc, :dur, :prio, :is_val)";

        $stmt = $this->db->prepare($sql);

        foreach($tasks as $task){

            $stmt->execute([
                'pid' => $plan_id,
                'title' => $task->title,
                'desc' => $task->description,
                'dur' => $task->duration,
                'prio' => $task->priority,
                'is_val' => 0
            ]);
        }
    }

    public function findPlanByDate($userId, $date) {
        $sql = "SELECT * FROM daily_plan WHERE user_id = :uid AND DATE(created_at) = :date";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['uid' => $userId, 'date' => $date]);
        return $stmt->fetch();
    }

    public function getTasksByPlanId($planId) {
        $sql = "SELECT * FROM task WHERE plan_id = :pid";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['pid' => $planId]);
        return $stmt->fetchAll();
    }
}
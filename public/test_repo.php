<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Repositories\PlanRepository;

echo "--- Testing PlanRepository ---\n";

// 1. Setup Data
$repo = new PlanRepository();
$userId = 1; // Assuming User ID 1 exists from our previous test
$goalSummary = "Learn PHP in a week";

try {
    // 2. Test Creating the Plan (The Header)
    echo "Attempting to create a Daily Plan...\n";
    $planId = $repo->dailyPlan($userId, $goalSummary);
    echo "✅ Plan Created! ID: " . $planId . "\n";

    // 3. Test Saving Tasks (The Items)
    echo "Attempting to save fake tasks...\n";
    
    // Create fake task objects (simulating AI response)
    $task1 = new stdClass();
    $task1->title = "Study PDO";
    $task1->description = "Read documentation on prepared statements";
    $task1->duration = "45m";
    $task1->priority = "High";

    $task2 = new stdClass();
    $task2->title = "Practice Loop";
    $task2->description = "Write a foreach loop for arrays";
    $task2->duration = "30m";
    $task2->priority = "Medium";

    $tasks = [$task1, $task2];

    $repo->saveTasks($planId, $tasks);
    echo "✅ Tasks Saved Successfully!\n";

} catch (Exception $e) {
    echo "❌ ERROR: " . $e->getMessage() . "\n";
}
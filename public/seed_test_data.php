<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Database;

echo "--- Seeding Database ---\n";

$db = Database::getInstance();

try {
    // 1. Create a Test User
    // We use "IGNORE" or check existence to avoid errors if you run this twice
    $username = 'TestUser';
    $email = 'test@example.com';
    $password = password_hash('password123', PASSWORD_BCRYPT);

    // Check if user exists first
    $stmt = $db->prepare('SELECT id FROM "user" WHERE email = ?');
    $stmt->execute([$email]);
    $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$existingUser) {
        $sqlUser = 'INSERT INTO "user" (username, email, password) VALUES (:name, :email, :pass) RETURNING id';
        $stmt = $db->prepare($sqlUser);
        $stmt->execute(['name' => $username, 'email' => $email, 'pass' => $password]);
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $userId = $userRow['id'];
        echo "✅ Created User ID: $userId\n";
    } else {
        $userId = $existingUser['id'];
        echo "ℹ️ User already exists (ID: $userId)\n";
    }

    // 2. Create a Profile for this User
    // We first delete any old profile for this user so we start fresh
    $db->prepare('DELETE FROM "profile" WHERE user_id = ?')->execute([$userId]);

    $sqlProfile = "INSERT INTO \"profile\" 
        (user_id, age, income_goal, time_available, current_stat, device, learning_style) 
        VALUES 
        (:uid, 25, '5000', '120', 'Student', 'laptop', 'visual')";

    $stmt = $db->prepare($sqlProfile);
    $stmt->execute(['uid' => $userId]);

    echo "✅ Created Profile for User ID: $userId\n";
    echo "--- Done! ---\n";

} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
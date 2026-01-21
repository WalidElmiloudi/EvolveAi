<?php

// 1. Load the Autoloader (Go up one level to find vendor)
require_once __DIR__ . '/../vendor/autoload.php';

use App\Services\PromptService;

echo "--- Testing PromptService ---\n";

// 2. Instantiate the Service
$service = new PromptService();

// 3. Define a User ID to test (Change this if you know a specific ID)
$testUserId = 2; 

echo "Attempting to fetch profile for User ID: $testUserId...\n\n";

// 4. Run the method
try {
    $prompt = $service->buildJsonPrompt($testUserId);

    if ($prompt) {
        echo "✅ SUCCESS! Here is the generated prompt:\n";
        echo "------------------------------------------------\n";
        echo $prompt . "\n";
        echo "------------------------------------------------\n";
    } else {
        echo "⚠️  Result is NULL.\n";
        echo "Possible reasons:\n";
        echo "1. The user with ID $testUserId does not exist.\n";
        echo "2. The user exists but has NO PROFILE data (The JOIN failed).\n";
    }
} catch (Exception $e) {
    echo "❌ ERROR: " . $e->getMessage() . "\n";
}
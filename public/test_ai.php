<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Services\AiService;

echo "🤖 Initializing AI Service...\n";

try {
    $ai = new AiService();

    $testPrompt = "Act as a Career Coach. Give me 3 short tasks for a PHP Developer. Return ONLY valid JSON.";

    echo "📤 Sending prompt to Hugging Face...\n";
    echo "------------------------------------------------\n";
    
    $startTime = microtime(true);
    $response = $ai->fetchGeminiResponse($testPrompt);
    $endTime = microtime(true);

    echo "✅ Success! (Took " . round($endTime - $startTime, 2) . "s)\n";
    echo "------------------------------------------------\n";
    echo $response . "\n";
    echo "------------------------------------------------\n";

} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    echo "------------------------------------------------\n";
    if (strpos($e->getMessage(), 'Curl') !== false) {
        echo "💡 Tip: Check your internet connection or SSL settings.\n";
    }
}
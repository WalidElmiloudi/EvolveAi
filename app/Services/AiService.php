<?php

namespace App\Services;

use App\Services\PromptService;

class AiService {

    private $apiKey;
    private $endpoint;
    private $prompt;

    public function __construct()
    {
        $this->apiKey = 'API_KEY';
        $this->endpoint = "https://router.huggingface.co/v1/chat/completions";
        $this->prompt = new PromptService;
    }
    
    public function fetchGeminiResponse()
    {
        $data = [
            'model' => 'meta-llama/Llama-3.1-8B-Instruct',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful AI Career Coach. You must output ONLY valid JSON. Do not add markdown or explanations.'],
                ['role' => 'user', 'content' => $this->prompt->buildJsonPrompt($_SESSION['user_email'])]
            ],
            'temperature' => 0.7,
            'max_tokens' => 1000
        ];

        $ch = curl_init($this->endpoint);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->apiKey
            ],
            CURLOPT_SSL_VERIFYPEER => false
        ]);

        $response = curl_exec($ch);

        if ($response === false) {
            throw new \Exception('Curl error: ' . curl_error($ch));
        }
        
        curl_close($ch);

        $responseData = json_decode($response, true);

        if (isset($responseData['choices'][0]['message']['content'])) {
            return $responseData['choices'][0]['message']['content'];
        } else {
            throw new \Exception('AI Error: ' . json_encode($responseData));
        }
    }
}
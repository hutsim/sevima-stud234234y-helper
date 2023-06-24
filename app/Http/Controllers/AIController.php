<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class AIController extends Controller
{
    public function index()
    {
        $results = session('results', []);
        $keywords = session('keywords', []);
        $text = session('text', []);
        if ($keyword = request()->input('keyword')) {
            $url = 'https://api.openai.com/v1/chat/completions';
            $headers = [
                'Content-Type: application/json',
                'Authorization: Bearer '.env('OPENAI_API_KEY'),
            ];
            $messages = [
                [
                    'role' => 'system',
                    'content' => 'You: ' . $keyword,
                ],
            ];
            $data = [
                'messages' => $messages,
                'model' => 'gpt-3.5-turbo',
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

            $response = curl_exec($ch);
            curl_close($ch);

            // return $response;

            $result = json_decode($response, true)['choices'][0]['message']['content'];
            // return $result;

            $results[] = $result;
            $keywords[] = $keyword;
            $text[] = [
                'result' => $result,
                'keyword' => $keyword,
            ];

            session(['text' => $text]);
        }

        return view('ai.index', compact('text'));
    }

    public function generatePrompt($keyword)
    {
        return <<<EOT
            Suggest three names for an animal that is a superhero.
            Animal: Cat
            Names: Captain Sharpclaw, Agent Fluffball, The Incredible Feline
            Animal: Dog
            Names: Ruff the Protector, Wonder Canine, Sir Barks-a-Lot
            Animal: {}
            Answer: strtoupper($keyword)
            EOT;
    }
}

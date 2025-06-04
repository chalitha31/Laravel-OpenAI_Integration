<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class CodeController extends Controller
{

    public function index()
    {
        return view('form');
    }

    public function generate(Request $request)
    {
        $prompt = $request->input('prompt');

      
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        
        $generatedCode = $response->choices[0]->message->content;

        return view('result', compact('generatedCode'));
    }
}




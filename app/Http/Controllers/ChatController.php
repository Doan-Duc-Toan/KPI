<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Throwable;
class ChatController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function index()
    {
        return view('chat');
    }
    public function __invoke(Request $request)
    {
        $response = Http::withHeaders([
            "Content-Type" => "application/json",
            "Authorization" => "Bearer " . env('CHAT_GPT_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            "model" => $request->post('model'),
            "messages" => [
                [
                    "role" => "user",
                    "content" => $request->post('content')
                ]
            ],
            "temperature" => 0,
            "max_tokens" => 2048
        ]);
        \Log::info("OpenAI Response: ", $response->json());
        // // Decode JSON response
        // $decodedResponse = json_decode($response, true);
        // if (isset($decodedResponse['choices'][0]['message']['content'])) {
        //     return $decodedResponse['choices'][0]['message']['content'];
        // } else {
        //     // Handle error or unexpected structure
        //     return "Unexpected API response structure or error";
        // }
    }
    // public function __invoke(Request $request): string
    // {

    //     try {
    //         /** @var array $response */
    //         $response = Http::withHeaders([
    //             "Content-Type" => "application/json",
    //             "Authorization" => "Bearer " . env('CHAT_GPT_KEY')
    //         ])->post('https://api.openai.com/v1/chat/completions', [
    //             "model" => $request->post('model'),
    //             "messages" => [
    //                 [
    //                     "role" => "user",
    //                     "content" => $request->post('content')
    //                 ]
    //             ],
    //             "temperature" => 0,
    //             "max_tokens" => 2048
    //         ])->body();
    //         return $response['choices'][0]['message']['content'];
    //     } catch (Throwable $e) {
    //         return "Chat GPT Limit Reached. This means too many people have used this demo this month and hit the FREE limit available. You will need to wait, sorry about that.";
    //     }
    // }
}

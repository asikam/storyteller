<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoryController extends Controller
{
    public function toImage(Request $request){

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ',
        ])->post('https://api.openai.com/v1/audio/translations',
                [
                        "model"=> "gpt-3.5-turbo",
                        "input"=> "The quick brown fox jumped over the lazy dog.",
                        "voice"=> "alloy"
                ]);

        dd($response);

    }
    public function toSpeech(Request $request){
        dd($request->get('toSpeech'));
    }


}

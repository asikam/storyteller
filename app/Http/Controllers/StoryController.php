<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    //
    public function toImage(Request $request){
        dd($request->get('toImage'));
    }
    public function toSpeech(Request $request){
        dd($request->get('toSpeech'));
    }


}

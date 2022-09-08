<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function result($time )
    {
        // 挨拶                                       //
        switch ($time) {
        case 'morning':
        $time = '朝';
        $greeting = 'おはようございます';
        break;
        case 'afternoon':
        $time = '昼';
        $greeting = 'こんにちは';
        break;
        case 'evening':
        $time = '夕方';
        $greeting = 'こんばんは';
        break;
        case 'night':
        $time = '夜';
        $greeting = 'おやすみ';
        break;
        }

        return view('greeting' , 
                    ['time' => $time, 'time_greeting' => $time_greeting]);
    }
}

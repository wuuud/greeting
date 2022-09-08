<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($time_zone)
    {
        // ①挨拶                                       //
        switch ($time_zone) {
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
                    ['time' => $time, 'greeting' => $greeting]);
    }

        // ②フリー                                     //
        public function free_greeting($free)
    {
        return view('free_greeting' ,['free' => $free]);
    }

       // ③ ランダム                                  //
        public function random_greeting()
    {
        $greets = ['おはよう','こんにちは', 'こんばんは', 'おやすみ'];
        $key = array_rand($greets, 1);
        $random_greeting = $greets[$key];
        return view('random', ['aaa' => $random_greeting]);
    }
}

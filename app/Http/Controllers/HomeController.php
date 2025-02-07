<?php

namespace App\Http\Controllers;

use App\Models\FreqQuestion;
use App\Models\News;
use App\Models\NextEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index(){
        $freq=FreqQuestion::latest()->take(3)->get();
        $news=News::all();
        $events=NextEvent::all();
        return view('website.index',compact('freq','news','events'));
    }
    public function viewFreqs(){
        $freq=FreqQuestion::all();
        return view('website.freq_questions',compact('freq'));
    }

    public function viewEvents(){
        $events = NextEvent::all()->map(function ($event) {
            $event->encrypted_id = Crypt::encryptString($event->id);
            return $event;
        });

        return view('website.next-events', compact('events'));
    }

    public function viewNews(){
        $news = News::all();
        return view('website.News', compact('news'));
    }

}

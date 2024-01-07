<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function getAllContent(Request $request)
    {
        $query = $request->string('query')->trim();
        if ($query) {
            $content = Content::where('title', 'LIKE', '%'.$query.'%')->get();
        } else {
            $content = Content::all();
        }
        
        return view('home', compact('content', 'query'));
    }
    
    public function getAllComment()
    {
        $comment = Comment::all();
        return view('home', compact('comment'));
    }
    public function getAllPlayList()
    {
        $playlist = PlayList::all();
        return view('home', compact('playlist'));
    }
    public function getAllSuscribe()
    {
        $suscribe = Suscribe::all();
        return view('home', compact('suscribe'));
    }
    public function getAllWatchLater()
    {
        $watchlater = WatchLater::all();
        return view('home', compact('watchlater'));
    }

}

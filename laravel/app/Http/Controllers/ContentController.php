<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\PlayList;
use App\Models\Suscribe;
use App\Models\User;
use App\Models\WatchLater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    // public function index()
    // {
    //     $user = Auth::user();
    //     $temp = "User: " . $user->name;
    //     return $temp;
    // }

    public function getAllContent(Request $request)
    {
        $query = $request->string('query')->trim();
        if ($query) {
            $content = Content::where('title', 'LIKE', '%' . $query . '%')->get();
        } else {
            $content = Content::all();
        }
        return view('home', compact('content', 'query'));
    }

    public function getContent($id)
    {
        $contents = Content::where('id', $id)->first();
        $comments = Comment::where('content_id', $id)->first();
        $watchlater = WatchLater::where('content_id', $id)->first();
        $user = User::where('id', $comments->user_id)->first();
        return view('detail', compact('contents', 'comments', 'user', 'watchlater'));
    }
}

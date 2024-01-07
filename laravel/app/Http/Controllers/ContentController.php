<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\PlayList;
use App\Models\Suscribe;
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
        $suscribe = Suscribe::all();
        return view('home', compact('content', 'query','suscribe'));
    }

}

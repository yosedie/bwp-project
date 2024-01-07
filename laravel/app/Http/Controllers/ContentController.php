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
        
        return view('home', compact('content'));
    }
}

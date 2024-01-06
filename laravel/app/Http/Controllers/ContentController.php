<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function getAllContent()
    {
        $content = Content::all();
        return view('home', compact('content'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function getAllController()
    {
        $content = Content::all();
        return view('home', compact('content'));
    }
}

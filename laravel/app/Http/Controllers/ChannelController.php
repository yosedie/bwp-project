<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;


class ChannelController extends Controller
{
    public function getAllChannel(Request $request)
    {
        $query = $request->string('query')->trim();
        if ($query) {
            $channel = Channel::where('NAME', 'LIKE', '%'.$query.'%')->get();
        } else {
            $channel = Channel::all();
        }
        return view('channel', compact("channel", 'query'));
    }

    public function getChannel($id)
    {
        $channels = Channel::where('id', $id)->get();
        return view('channel', compact('channel'));
    }
}

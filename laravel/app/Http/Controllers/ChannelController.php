<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;


class ChannelController extends Controller
{
    public function getAllChannel()
    {
        $channel = Channel::all();
        return view('channel', compact("channel"));
    }

    public function getChannel($id)
    {
        $channels = Channel::where('id', $id)->get();
        return view('channel', compact('channel'));
    }
}

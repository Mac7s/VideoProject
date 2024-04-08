<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show(Video $video){
        $comments = $video->comments;
        $videos = $video->category->videos()->take(12)->get() ?? $video->category->videos;
        return view('show')->with(['video'=>$video,'related_videos'=>$videos,'comments'=>$comments]);
    }
}

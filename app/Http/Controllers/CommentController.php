<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Video $video, Request $request){
        Comment::create([
            'video_id'=>$video->id,
            'user_id'=>auth()->user()->id,
            'description'=>$request->description
        ]);
        return redirect()->back();
    }
}

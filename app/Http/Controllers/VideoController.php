<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Models\Category;
use App\Models\Video;
use App\Services\StoreVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function show(Video $video){
        $comments = $video->comments;
        $videos = $video->category->videos()->take(12)->get() ?? $video->category->videos;
        return view('show')->with(['video'=>$video,'related_videos'=>$videos,'comments'=>$comments]);
    }

    public function create(){
        $categories = Category::all();
        return view('create')->with(['categories'=>$categories]);
    }

    public function store(StoreVideoRequest $request){
        (new StoreVideo)->store($request->all());
        return redirect()->route('index')->with('success','عملیات موفقیت آمیز بود');
    }

}

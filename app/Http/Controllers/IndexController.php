<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $mostViewedVideos = Video::take(6)->latest()->get();
        $latestVideos = Video::take(6)->inRandomOrder()->get();
        $mostPopularVideos = Video::take(6)->inRandomOrder()->get();
        return view("index")->with([
            'mostViewedVideos'=>$mostViewedVideos,
            'latestVideos'=>$latestVideos,
            'mostPopularVideos'=>$mostPopularVideos
        ]);
    }
}

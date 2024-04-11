<?php

namespace App\Services;

use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class StoreVideo{
    public function store(array $params){
        $video = $this->storeFile($params['video']);
        $thumbnail = $this->storeFile($params['thumbnail']);
        Video::create([
            'title'=>$params['title'],
            'description'=>$params['description'],
            'thumbnail'=>$thumbnail,
            'url'=>$video,
            'slug'=>$params['slug'],
            'category_id'=>$params['category_id'],
            'user_id'=>auth()->user()->id,
            'lenght'=>$params['length']
        ]);
    }

    private function storeFile($file){
        $storedFile =Storage::disk('local')->put('public',$file);
        $storedFile = str_replace('public/','storage/',$storedFile);
        return $storedFile;
    }
}


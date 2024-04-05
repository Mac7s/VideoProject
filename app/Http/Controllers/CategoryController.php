<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $videos = $category->videos()->paginate(12);
        return view('category.index',[
            'categoryName'=>$category->name,
            'videos'=>$videos
        ]);
    }
}

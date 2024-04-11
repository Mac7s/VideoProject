<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class,'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get("videos/create",[VideoController::class,'create'])->name('videos.create');
    Route::post("videos/store",[VideoController::class,'store'])->name('videos.store');
});

require __DIR__.'/auth.php';


Route::get('categories/{category:name}/videos',[CategoryController::class,'index'])->name('categories.videos.index');

Route::get('videos/{video:slug}',[VideoController::class,'show'])->name('videos.show'); 
Route::post('videos/{video:slug}/comments',[CommentController::class,'store'])->name('comments.store');
Route::get('videos/{video:slug}/download',[VideoController::class,'download'])->name('videos.download');


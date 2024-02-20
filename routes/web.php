<?php

use App\Http\Controllers\iUserController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [pageController::class, 'index'])->name('index');
Route::get('/blog', [pageController::class, 'blog'])->name('blog');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/service', [pageController::class, 'service'])->name('service');
Route::get('/testamonials', [pageController::class, 'testamonials'])->name('testimonial');
Route::get('/project', [pageController::class, 'project'])->name('project');
Route::get('/team', [pageController::class, 'team'])->name('team');

Route::post('/contact', [iUserController::class, 'store'])->name('contact.page');

Route::prefix('blog')->group(function(){
    Route::get('/metaverse', [pageController::class, 'metaverse'])->name('blog.metaverse');
    Route::get('/python-oops', [pageController::class, 'python_oops'])->name('blog.python-oops');
    Route::get('/blockchain', [pageController::class, 'blockchain'])->name('blog.blockchain');
});

Route::prefix('service')->group(function (){
    Route::get('chatbot', [pageController::class, 'chatbot'])->name('services.chatbot');
});
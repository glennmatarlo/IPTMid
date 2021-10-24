<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'home']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/register', [UserController::class, 'registrationForm']);
Route::get('/verification/{user}/{token}', [UserController::class, 'verification']);
Route::get('/login', [UserController::class, 'loginForm']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/profile/upload', [UserController::class, 'upload_photo_user'])->middleware('auth');

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/profile', [PostsController::class, 'myp'])->middleware('auth');
Route::get('/profile', [PostsController::class, 'createnewpost'])->middleware('auth');

Route::get('/dashboard', [PostsController::class, 'index'])->middleware('auth');
Route::get('/authors', [PostsController::class, 'showauthors'])->middleware('auth');
Route::get('/categories/{category}', [PostsController::class, 'postscategory'])->middleware('auth');
Route::get('/authors/{user}', [PostsController::class, 'showauthorposts'])->middleware('auth');
Route::post('/post', [PostsController::class, 'store'])->middleware('auth');

Route::post('logout', [UserController::class, 'logout'])->name('logout');
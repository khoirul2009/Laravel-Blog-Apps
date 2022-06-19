<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('home', [
        "title"     => "Home",
        "active"     => "Home",
    ]);
});
Route::get('/about', function () {
    return view('hello', [
        "title"     => "About",
        "active"     => "About",
        "nama"      => "Muhammad Khoirul Afwan",
        "nim"       => "A11.2020.12684",
        "kelompok"  => 4310
    ]);
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [PostController::class, 'categories']);
Route::get('/signin', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/signin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'register'])->middleware('guest');
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard | Home'
    ]);
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

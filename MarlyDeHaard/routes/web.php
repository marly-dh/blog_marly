<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\post;

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

Route::resource('posts', PostController::class);

Route::get('/', function () {
    $posts = Post::all();

    return view('welcome', compact('posts'));
});

Route::get('/dashboard', function () {
    return redirect('posts');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

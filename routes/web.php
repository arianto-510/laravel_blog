<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('pages.post', [
        'title' => 'Category ' . $category->name,
        'posts' => $category->posts->load('category', 'user')
    ]);
});

Route::get('/post/{category:slug}', function (Category $category) {

    // $id_post = decrypt($id);
    // $model = Post::where('id',$id_post)->fist();  Kembalikan satu data berdasarkan id yang sama jika tidak ada maka akan mengembalikan array kosong
    //$model = Post::find($id_post); // Kembalikan satu data berdasarkan id yang sama jika tidak ada maka akan mengembalikan array kosong
    // $model = Post::findOrFail($id_post); Kembalikan satu data berdasarkan id yang sama jika tidak ada maka akan mengembalikan PAGE NOT found 404
    // $model->title = "Judul Ganti";  // Modifikasi colom title
    // $model->update([]);
    // dd($model);

    return view('pages.post', [
        'title' => 'Category ' . $category->posts->title,
        'posts' => $category->posts->load('category', 'user')
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('pages.post', [
        'title' => 'Author ' . $author->name,
        'posts' => $author->posts->load('category', 'user')
    ]);
});

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function () {
    return view('pages.admin', [
        // 'post' => Post::count()->where('user_id', auth()->user->id)
    ]);
})->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

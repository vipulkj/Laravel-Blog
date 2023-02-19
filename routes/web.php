<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserControler;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin/table', function () {
    return view('admin/table');
})->name('tables');
// Route::get('/admin/posts', function () {
//     return view('admin/posts');
// })->name('posts');
// Route::get('/admin/users', function () {
//     return view('admin/users');
// })->name('user');


Route::get('/admin/add-post', function () {
    return view('admin/add-post');
})->name('add-post');


// admin post login

Route::get('/admin/login',[UserControler::class,'login'])->name('login');

Route::post('/authenticate',[UserControler::class,'authenticate'])->name('authenticate');

Route::get('/logout',[UserControler::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/index', function () {
        return view('admin/index');
    })->name('index');

    Route::get('/admin/changepassword',[UserControler::class,'changepassword'])->name('changepassword');

    Route::post('/admin/changepassword/reset',[UserControler::class,'resetpassword'])->name('resetpassword');
    // category Routes

    Route::get('/admin/category', [CategoryController::class, 'viewCategory'])->name('category');
    Route::get('/admin/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('admin/category/store', [CategoryController::class, 'store'])->name('store-category');
    Route::get('/admin/edit-category/{id}', [CategoryController::class, 'showCategoryData'])->name('edit-category');
    Route::post('admin/edit-category/update/{id}', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::get('/admin/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    // post routes

    Route::get('/admin/post/all', [PostController::class, 'index'])->name('post.all');
    Route::get('/admin/post/view/{id}', [PostController::class, 'postview'])->name('post.view');
    Route::get('/admin/post/add', [PostController::class, 'create'])->name('post.add');
    Route::post('/admin/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/admin/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/admin/post/edit/update/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('/admin/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');

    Route::get('/search',[HomePageController::class,'search'])->name('search');

    // post ajax routes
    Route::post('/admin/post/status/{id}', [PostController::class, 'changeStatus']);

    // users route

    Route::get('/admin/user/all', [UserControler::class, 'index'])->name('user.all');
    Route::get('/admin/user/add', [UserControler::class, 'create'])->name('user.add');
    Route::post('/admin/user/store', [UserControler::class, 'store'])->name('user.store');
    Route::get('/admin/user/edit/{id}', [UserControler::class, 'edit'])->name('user.edit');
    Route::post('/admin/user/edit/update/{id}', [UserControler::class, 'update'])->name('user.update');
    Route::get('/admin/user/delete/{id}', [UserControler::class, 'destroy'])->name('user.delete');


    Route::get('/admin/comments',[CommentController::class,'index'])->name('comments');
    Route::get('/admin/comment/view/{id}',[CommentController::class,'show'])->name('comment.view');
    Route::get('/admin/comments/delete/{id}',[CommentController::class,'destroy'])->name('comments.delete');
    Route::get('/admin/comments/reply/{id}',[CommentController::class,'commentview'])->name('comments.view');


    Route::get('/contacts',[ContactController::class,'index'])->name('contacts.request');
    Route::get('/contacts/delete/{id}',[ContactController::class,'destroy'])->name('contact.delete');

});

// front route

Route::get('/',[HomePageController::class,'homepage'])->name('home');
Route::get('/post/{id}',[HomePageController::class,'post'])->name('single.post');
Route::get('/category/{slug}',[HomePageController::class,'categorywisepost'])->name('category.posts');
Route::get('/front/post/like/{id}',[HomePageController::class,'updateLikes']);

Route::get('/tags/{tag}',[HomePageController::class,'tagwisepost'])->name('tags.posts');




Route::get('/front/about', function () {
    return view('front/about');
})->name('about');
Route::get('/front/contact', function () {
    return view('front/contact');
})->name('contact');
Route::get('/front/post', function () {
    return view('front/post');
})->name('post-detail');

Route::post('/post/comments',[CommentController::class,'store'])->name('storecomments');
Route::post('/contact',[HomePageController::class,'userContactStore'])->name('contactmessage.store');

// Route::get('/front/all-posts', function () {
//     return view('front/all-posts');
// })->name('all-posts');

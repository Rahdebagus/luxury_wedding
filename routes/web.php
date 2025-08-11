<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\AddonFlowerController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TermsController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
});


// Route::controller(AuthController::class)->group(function () {
//     Route::get('/login', 'index')->name('login');
//     Route::post('/login', 'login');
//     Route::get('/logout', 'logout')->name('logout');
// });

// Route::middleware('auth')->group(function () {

Route::prefix('invitation')
    ->name('invitation.')
    ->group(function () {
        Route::get('/',      [InvitationController::class, 'index'])->name('index');
    });


Route::prefix('invitation')->name('invitation.')->group(function () {

    // Page
    Route::get('/guestbook', [CommentController::class, 'index'])
        ->name('comment.index');
});
Route::prefix('comment')->name('comment.')->group(function () {
    Route::get('/list', [CommentController::class, 'list'])->name('list');
    Route::post('/',     [CommentController::class, 'store'])->name('store');
    Route::get('/{id}',  [CommentController::class, 'show'])->name('show');
    Route::put('/{id}',  [CommentController::class, 'update'])->name('update');
    Route::delete('/{id}', [CommentController::class, 'destroy'])->name('destroy');
});

    // Route::prefix('comment')
    //     ->name('comment.')
    //     ->group(function () {
    //         Route::get('/',      [FlowerController::class, 'index'])->name('index');
    //         Route::get('table',  [FlowerController::class, 'table'])->name('table');
    //         Route::post('store', [FlowerController::class, 'store'])->name('store');
    //         Route::post('update', [FlowerController::class, 'update'])->name('update');
    //         Route::post('delete', [FlowerController::class, 'delete'])->name('delete');
    //     });







// });

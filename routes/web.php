<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('auth/register/store', [AuthController::class, 'registerStore'])->name('auth.register.store');

Route::post('auth/login/check', [AuthController::class, 'loginCheck'])->name('auth.login.check');

Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('auth/login', [AuthController::class, 'login'])->name('login.register');

    Route::get('/admin/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
    

    Route::get('/category/index',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{cat}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{cat}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{cat}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    // Route::get('/hubs/{hub}/getDistrict', [HubController::class, 'getDistrict'])->name('hubs.getDistrict');

    Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');


    Route::get('/author/index',[AuthController::class,'profile'])->name('author.index');
});
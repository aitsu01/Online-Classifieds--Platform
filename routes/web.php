<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;



Route::get('/', [PublicController::class, 'index'])->name('homepage');
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
Route::get('/revisor/index',[RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::post('/undo', [ArticleController::class, 'undoLastAction'])->name('undo');

Route::get('/revisor/form', [RevisorController::class, 'becomeRevisorForm'])->middleware('auth')->name('become.revisor.form');
Route::post('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');






<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CollaboratorController;

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

Route::get('/',[FrontController::class, 'homepage'])->name('homepage');
Route::get('/category/{category}', [FrontController::class, 'show'])->name('category');
Route::get('/auth/login-register', [FrontController::class, 'autenticate'])->name('autenticate');
Route::get('/ricerca/annuncio', [FrontController::class, 'searchArticles'])->name('articles.search');
Route::post('/lingua/{lang}', [FrontController::class, 'setLocale'])->name('setLocale');

Route::get('/aboutUs',[CollaboratorController::class, 'index'])->name('about.us');



Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create',[ArticleController::class, 'create'])->middleware('auth')->name('article.create');
Route::post('/article/store',[ArticleController::class, 'store'])->name('article.store');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/revisor/show/{article}', [RevisorController::class, 'show'])->middleware('is_revisor')->name('revisor.show');
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('is_revisor')->name('revisor.index');
Route::patch('/accept/article/{article}', [RevisorController::class, 'acceptArticle'])->middleware('is_revisor')->name('revisor.acceptArticle');
Route::patch('/reject/article/{article}', [RevisorController::class, 'rejectArticle'])->middleware('is_revisor')->name('revisor.rejectArticle');
Route::patch('/null/article/{article}', [RevisorController::class, 'nullArticle'])->middleware('is_revisor')->name('revisor.nullArticle');

Route::get('/revisor/collabora', [RevisorController::class, 'collabora'])->name('revisor.collabora');
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

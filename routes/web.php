<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

// Common Resource Routes:
// index - Show all articles
// show - Show single article
// create - Show form to create new article
// store - Store new article
// edit - Show form to edit article
// update - Update article
// destroy - Delete article  

// All Articles
Route::get('/', [ArticleController::class, 'index']);

// Show Create Form
Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('auth');

// Store Article Data
Route::post('/articles', [ArticleController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth');

// Update Article
Route::put('/articles/{article}', [ArticleController::class, 'update'])->middleware('auth');

// Delete Article
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->middleware('auth');

// Manage Articles
Route::get('/articles/manage', [ArticleController::class, 'manage'])->middleware('auth');

// Single Article
Route::get('/articles/{article}', [ArticleController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
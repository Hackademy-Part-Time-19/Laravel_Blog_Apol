<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Models\Article;
use App\Models\Category;

Route::get('/', [PageController::class, 'HomePage'])->name('HomePage');

Route::get('/ChiSono', [PageController::class, 'WhoIam'])->name('WhoIam');

Route::get('/Contatti', [PageController::class, 'Contacts'])->name('Contacts');

Route::get('/Articolo/{id}', [ArticleController::class, 'Show'])->name('ArticleShow');

Route::get('/Articoli/{categoria}', [ArticleController::class, 'ShowByCategory'])->name('ArticoliPerCategoria');

Route::post('/Contatti/invio', [MailController::class, 'SendEmail'])->name('Email.send');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')/*->middleware('auth')*/;

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('user/settings', function () {
    return view('user.settings');
})->name('user.settings')->middleware('auth');

// Route::resource('category', CategoryController::class);

Route::resource( 'articles' ,ArticleController::class);

Route::resource( 'categories' ,CategoryController::class);




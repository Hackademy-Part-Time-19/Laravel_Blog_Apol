<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;

Route::get('/', [PageController::class, 'HomePage'])->name('HomePage');

Route::get('/Articoli', [ArticleController::class, 'Index'])->name('ArticleIdex');

Route::get('/ChiSono', [PageController::class, 'WhoIam'])->name('WhoIam');

Route::get('/Articolo/{id}', [ArticleController::class, 'Show'])->name('ArticleShow');

Route::get('/Contatti', [PageController::class, 'Contacts'])->name('Contacts');

Route::get('/Articoli/{categoria}', [ArticleController::class, 'ShowByCategory'])->name('ArticoliPerCategoria');

Route::post('/Contatti/invio', [MailController::class, 'SendEmail'])->name('Email.send');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');


Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');


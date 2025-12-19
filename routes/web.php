<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BlogController;
use App\Models\MainProduct;
use App\Http\Controllers\ContactController;

// -----------------------------
// STATIC PAGES
// -----------------------------

// Home Page
Route::get('/', function () {
    $mainProducts = MainProduct::all(); // Fetch all main products
    return view('home', compact('mainProducts'));
})->name('home');
// About Page
Route::get('/about', function () {
    return view('about');  // resources/views/about.blade.php
})->name('about');

// Contact 



Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-send', [ContactController::class, 'send'])
     ->name('contact.send');

// -----------------------------
// PRODUCTS
// -----------------------------
Route::get('/products', [ProductsController::class,'index'])->name('products.index');
Route::get('/products/{mainSlug}', [ProductsController::class,'showMain'])->name('products.main');
Route::get('/products/{mainSlug}/{subSlug}', [ProductsController::class,'showSub'])->name('products.sub');
Route::get('/products/{mainSlug}/{subSlug}/{subSubSlug}', [ProductsController::class,'showSubSub'])->name('products.subsub');


// -----------------------------
// SEARCH
// -----------------------------
Route::get('/search', [SearchController::class,'search'])->name('search');


// -----------------------------
// BLOG
// -----------------------------
Route::get('/blog', [BlogController::class,'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class,'show'])->name('blogs.show');
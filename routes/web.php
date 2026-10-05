<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SubscriptionController;

// ==========================================
// Home Page Routes
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home-2', [HomeController::class, 'homeTwo'])->name('home.two');

// ==========================================
// SEO
// ==========================================
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// ==========================================
// About Page Route
// ==========================================
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// ==========================================
// Service Page Route
// ==========================================
Route::get('/legal-document', [ServiceController::class, 'index'])->name('services.index');
Route::get('/legal-document/{slug}', [ServiceController::class, 'details'])->name('services.details');

// ==========================================
// Project Page Route
// ==========================================
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'details'])->name('projects.details');

// ==========================================
// Blog Page Route
// ==========================================
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/search', [BlogController::class, 'blogSearch'])->name('blogs.search');
Route::get('/blogs/{slug}', [BlogController::class, 'details'])->name('blogs.details');
Route::get('/blogs/by/category/{categoryName}', [BlogController::class, 'blogByCategory'])->name('blogs.by.category');
Route::get('/blogs/by/tag/{tabName}', [BlogController::class, 'blogByTab'])->name('blogs.by.tab');


// ==========================================
// Contact Page Route
// ==========================================
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// ==========================================
// Subscription Route
// ==========================================
Route::post('subscription/submit', [SubscriptionController::class, 'submit'])->name('subscription.submit');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;

// Public Landing Page
Route::get('/', function () {
    $menus = App\Models\Menu::all();
    $coffees = $menus->where('category', 'coffee');
    $nonCoffees = $menus->where('category', 'non-coffee');
    $snacks = $menus->where('category', 'snack');

    // Fetch Gallery Links for Calendar (Keyed by Date string Y-m-d)
    $galleryLinks = App\Models\GalleryLink::all()->keyBy(function($item) {
        return $item->photo_date->format('Y-m-d');
    });
    
    return view('welcome', compact('coffees', 'nonCoffees', 'snacks', 'galleryLinks'));
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [MenuController::class, 'index'])->name('admin.dashboard');

    // Menu CRUD Resource
    // This creates routes for index, create, store, show, edit, update, destroy
    // Menu CRUD Resource
    Route::resource('menus', MenuController::class);

    // Gallery Management
    Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery', [App\Http\Controllers\GalleryController::class, 'store'])->name('gallery.store');
    // Gallery Management
    Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery', [App\Http\Controllers\GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/{galleryLink}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('gallery.destroy');

    // Feedback Management
    Route::get('/feedbacks', [App\Http\Controllers\FeedbackController::class, 'index'])->name('admin.feedbacks.index');
    Route::delete('/feedbacks/{feedback}', [App\Http\Controllers\FeedbackController::class, 'destroy'])->name('admin.feedbacks.destroy');
});

// Public Feedback Route
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');

use Illuminate\Support\Facades\DB;

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return 'DB CONNECTED';
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});

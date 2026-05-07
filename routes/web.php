<?php

use App\Http\Controllers\Admin\AdminDashboardContrller;
use App\Http\Controllers\Admin\AdminLogoController;
use App\Http\Controllers\Admin\EditeorDashboardContrller;
use App\Http\Controllers\Admin\ModeratorDashboardController;
use App\Http\Controllers\Admin\UseerDashboardContrller;
use App\Http\Controllers\Frontend\AnimationController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EditeorMidleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');})->name('welcome');





Route::middleware('auth','verified','editor')->group(function () {
  Route::get('/editor/dashboard', [EditeorDashboardContrller::class, 'index'])->name('editor.dashboard');

});
Route::middleware('auth','verified','user')->group(function () {
  Route::get('/user/dashboard', [UseerDashboardContrller::class, 'index'])->name('user.dashboard');

});

Route::middleware('auth','verified','moderator')->group(function () {
  Route::get('/moderator/dashboard', [ModeratorDashboardController::class, 'index'])->name('moderator.dashboard');

});


Route::middleware('auth','verified','admin')->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardContrller::class, 'index'])->name('admin.dashboard');



});
Route::middleware(['auth','verified','admin'])->group(function () {

    // frontend logo
    Route::get('/admin/frontend/logo', [AdminDashboardContrller::class, 'frontendLogoIndex'])->name('frontend.logo.index');
    Route::post('/admin/frontend/logo/store', [AdminDashboardContrller::class, 'store'])->name('frontend.logo.store');
    // admin logo
    Route::get('/admin/admin/logo', [AdminLogoController::class, 'adminLogoIndex'])->name('admin.logo.index');
    Route::post('/admin/admin/logo/store', [AdminLogoController::class, 'adminLogoStore'])->name('admin.logo.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});










    Route::get('/animation', [AnimationController::class, 'index'])->name('animation.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contacts/submit', [ContactController::class, 'store'])->name('contacts.store');


require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CsvController;

//profile routes
Route::get('/', [ProfileController::class, 'show']);
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/delete', [ProfileController::class, 'delete'])->name('profile.delete');

//Contact routes
//dd('web route for contact');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
//dd('web route for contact');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::put('/contact/update', [ContactController::class, 'update'])->name('contact.update');

//Route::get('/contact', function() {
//    return View::make('pages.contact');
//})->name('contact');


// define resource for posts
Route::resource('posts' , PostController::class);


//rest routes
Route::get('/service', function() {
    return View::make('pages.service');
})->name('service');

Route::get('/about', function() {
    return View::make('pages.about');
})->name('about');

Route::get('/users' , [CsvController::class , 'index']);



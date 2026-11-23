<?php

use App\Http\Controllers\Admin\castController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\settingsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\categoryNewsController;
use App\Http\Controllers\Admin\categoryMovieController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register' , function (){
    return view('register');

})->name('register');



Route::get('/login' , function (){
    return view('Admin.Dashboard.index');

})->name('login');


Route::get('/dashboard', function () {
    return view('Admin.Dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/CategoryNews', function () {
//    return view('Admin.CategoryNews.index');
//});

//Route::get('/CategoryMovie', function () {
//    return view('Admin.CategoryMovie.index');
//});

Route::get('/create_cast', function () {
    return view('Admin.casts.create');
})->name('insert2');

Route::get('/create_news', function () {
    return view('Admin.CategoryNews.create');
})->name('insert3');

Route::get('/create', function () {
    return view('Admin.CategoryMovie.create');
})->name('insert');
//Route::get('/update', function () {
//    return view('Admin.CategoryMovie.edit');
//})->name('update');
Route::resource('/Admin/CategoryMovie' , categoryMovieController::class);
Route::resource('/Admin/CategoryNews' , categoryNewsController::class);
Route::resource('/Admin/casts' , castController::class);
Route::resource('/Admin/settings' , settingsController::class);
Route::resource('/Admin/movies' , MovieController::class)->names("movie");


//Route::post('/categoryMovie', [categoryMovieController::class, 'store'])->name('store');
//Route::get('/dashboard2' , function (){
//   return view();
//})->name('dashboard2');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

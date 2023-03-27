<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //category routes

    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}','update');
    });

    Route::get('/brands',App\Http\Livewire\Admin\Brand\Index::class);
    /*
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('category', [App\Http\Controllers\Admin\CategoryController::class,'store']);
    admin/category/'.{$category->id}.'/edit
    */

    
});
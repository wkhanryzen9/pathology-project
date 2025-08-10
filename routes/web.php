<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\loginCode;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});
          
Route::get('/login', [loginController::class, 'loginView'])->name('login');

Route::post('/auth', [loginCode::class, 'login'])->name('auth.post');


// Route::middleware(['middleware'=> 'auth'], function(){
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
    // Category
    Route::get('/add_category', [CategoryController::class, 'add'])->name('add_category');
    Route::post('/store_category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/update', [CategoryController::class, 'update'])->name('update');
    // Sub-Category
    Route::get('/subcategory', [SubCategoryController::class, 'index'])->name('sub_category.index');
    Route::get('/add_subcategory', [SubCategoryController::class, 'add'])->name('sub_category.add');
    Route::post('/store_subcategory', [SubCategoryController::class, 'store'])->name('sub_category.store');
    Route::get('/edit_subcategory/{id}', [SubCategoryController::class, 'edit'])->name('sub_category.edit');
    Route::post('/update_subcategory', [SubCategoryController::class, 'update'])->name('sub_category.update');
    // Test
    Route::get('/test', [TestController::class, 'index'])->name('test.index');
    Route::get('/add_test', [TestController::class, 'create'])->name('test.add');
    Route::post('/store_test', [TestController::class, 'store'])->name('test.store');
    Route::get('/edit_test/{id}', [TestController::class, 'edit'])->name('test.edit');
    Route::post('/update_test', [TestController::class, 'update'])->name('test.update');
    Route::get('/delete_test/{id}', [TestController::class, 'destroy'])->name('test.delete');
    // Report
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::get('/add_report', [ReportController::class, 'create'])->name('report.add');
    Route::post('/store_report', [ReportController::class, 'store'])->name('report.store');
    Route::get('/view_report/{id}', [ReportController::class, 'view_report'])->name('report.view_report');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/login');
    })->name('auth.logout');
});

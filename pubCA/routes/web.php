<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PubController as UserPubController;
use App\Http\Controllers\Admin\PubController as AdminPubController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Type of User Home
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('user/pubs/', [UserPubController::class, 'index'])->name('user.pubs.index');
Route::get('user/pubs/{id}', [UserPubController::class, 'show'])->name('user.pubs.show');

Route::get('admin/pubs/', [AdminPubController::class, 'index'])->name('admin.pubs.index');
Route::get('/admin/pubs/create', [AdminPubController::class, 'create'])->name('admin.pubs.create');
Route::get('admin/pubs/{id}', [AdminPubController::class, 'show'])->name('admin.pubs.show');


Route::get('/admin/pubs/', [AdminPubController::class, 'index'])->name('admin.pubs.index');
Route::get('/admin/pubs/{id}', [AdminPubController::class, 'show'])->name('admin.pubs.show');
Route::get('/admin/pubs/{id}/edit', [AdminPubController::class, 'edit'])->name('admin.pubs.edit');
Route::post('/admin/pubs/store', [AdminPubController::class, 'store'])->name('admin.pubs.store');
Route::put('/admin/pubs/{id}', [AdminPubController::class, 'update'])->name('admin.pubs.update');
Route::delete('/admin/pubs/{id}', [AdminPubController::class, 'destroy'])->name('admin.pubs.destroy');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout']
)->name('admin.logout');


// User Management All Routes

Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'ViewUser'])->name('user.view');
    Route::get('/add_user', [UserController::class, 'AddUser'])->name('user.add');
    Route::post('/store', [UserController::class, 'StoreUser'])->name('user.store');

});


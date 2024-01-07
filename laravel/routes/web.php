<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserAdministrator;
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
    return redirect()->route('login');
});
// Route::get('/home', [ContentController::class, 'index']);
Route::get('/home', [ContentController::class, 'getAllContent'])->middleware(['auth', 'verified'])->name('users');
Route::get('/channel', [ChannelController::class, 'getAllChannel'])->middleware(['auth', 'verified'])->name('user');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');
Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin');

// show all usersn
Route::get('/admin', [UserAdministrator::class, 'getUsers'])->name('dashboard');

// delete users
Route::get('/delete/{id}', [UserAdministrator::class, 'delete'])->name('delete');
// Route::get('/alladmin', [UserAdministrator::class, 'getUsers'])->name('alladmin');


require __DIR__ . '/auth.php';

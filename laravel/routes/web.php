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
Route::get('/detail/{id}', [ContentController::class, 'getContent'])->middleware(['auth', 'verified'])->name('detail');
Route::get('/channel', [ChannelController::class, 'getAllChannel'])->middleware(['auth', 'verified'])->name('user');

// Menampilkan detail channel
Route::get('/channel/{id}', [ChannelController::class, 'getChannel'])->name('channel.detail');

// Aksi subscribe channel
Route::post('/subscribe/{id}', [ChannelController::class, 'subscribeChannel'])->name('subscribe.channel');

// Aksi follow channel
Route::post('/follow/{id}', [ChannelController::class, 'followChannel'])->name('follow.channel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin');

// show all usersn
Route::get('/admin', [UserAdministrator::class, 'getUsers'])->name('dashboard');

//delete users
Route::post('/changeUserRole/{id}', [UserAdministrator::class, 'changeUserRole']);

Route::post('/create', [UserAdministrator::class, 'create']);

Route::get('/getUsers', [UserAdministrator::class, 'getUsers'])->name('getUsers');

Route::post('/update-user', [UserAdministrator::class, 'updateUser'])->name('update-user');

// Route::get('/create',[UserAdministrator::class,'create']);
// Route::get('/store',[UserAdministrator::class,'store']);
// Route::get('/show/{id}',[UserAdministrator::class,'show']);
Route::get('/update/{id}',[UserAdministrator::class,'update']);
// Route::get('/destroy/{id}',[UserAdministrator::class,'destroy']);



// Route::get('/delete/{id}', [UserAdministrator::class, 'delete'])->name('delete');

// Route::delete('/admin/{id}', [UserAdministrator::class, 'destroy'])->name('destroy');
// Route::get('/alladmin', [UserAdministrator::class, 'getUsers'])->name('alladmin');


require __DIR__ . '/auth.php';

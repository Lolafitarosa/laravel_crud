<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmployeeController;
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
// Default Laravel route
Route::get('/', function () {
    return redirect("/blog");
});

// Blog routes
Route::get('/blog', [BlogController::class, 'home'])->name ('home');
Route::get('/blog/tentang', [BlogController::class, 'tentang'])->name ('tentang');

Route::get('/blog/kontak', [BlogController::class, 'kontak'])->name ('kontak');
Route::get('/blog/kontak/submit/message', [BlogController::class, 'showmessage'])->name('kontak.message');
Route::post('/blog/kontak/submit', [BlogController::class, 'submitKontak'])->name ('kontak.submit');

Route::get('/blog/audiobook', [BlogController::class, 'audiobook']);

Route::get('/perpustakaan', [EmployeeController::class, 'index'])->name('perpustakaan');







<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Middleware\userd;
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

// Route::get('/dashbord', function () {
//     return view('backend.dashbord');
// })->middleware(['admin'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logout', [adminController::class, 'logout']);
Route::get('/user/panal', [adminController::class, 'dashbord'])->middleware(['userd']);
Route::get('admin/panal', [adminController::class, 'dashbord'])->middleware(['admind']);
Route::get('/me', [adminController::class, 'me']);
Route::get('/admin/home', [adminController::class, 'home']);
// Route::get('/user', [adminController::class, 'showusr']);

Route::get('/show', [adminController::class, 'show'])->middleware(['cheakr']);
Route::get('/edit/{id}', [adminController::class, 'edit'])->middleware(['cheakr']);
Route::post('/update/{id}', [adminController::class, 'update'])->middleware(['cheakr']);
Route::get('/fast', [adminController::class, 'fast'])->middleware(['cheakr']);
Route::post('/fasts', [adminController::class, 'fast_store'])->middleware(['cheakr']);
Route::get('/about', [adminController::class, 'about'])->middleware(['cheakr']);
Route::post('/abouts', [adminController::class, 'abouts'])->middleware(['cheakr']);


Route::get('/projectpic', [adminController::class, 'workphoto'])->middleware(['cheakr']);
Route::post('/work-photos', [adminController::class, 'store_workphoto'])->middleware(['cheakr']);

Route::get('/contact', [adminController::class, 'contact_show'])->middleware(['cheakr']);
Route::post('/contactme', [adminController::class, 'contact']);


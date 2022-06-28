<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/detail', function () {
//     return view('detail');
// });


Route::get('/', [PostController::class, 'index']);
Route::get('/detail/{post}',[PostController::class, 'detailPost']);
Route::get('/about', [PostController::class, 'aboutPost']);

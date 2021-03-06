<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolymorphiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::apiResources([
    'user' => UserController::class,
    'address' => AddressController::class,
    'post' => PostController::class,
    'category' => CategoryController::class
]);

Route::get('polyGet', [PolymorphiController::class, 'index']);
Route::get('polyPost', [PolymorphiController::class, 'insert']);

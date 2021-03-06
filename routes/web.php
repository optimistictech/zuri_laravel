<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get(
    '/user/all',
    [UserController::class, 'Get']
);
Route::get(
    '/user/{id}/edit',
    [UserController::class, 'Edit']
);

Route::patch(
    '/user/{id}',
    [UserController::class, 'Update']
);
Route::delete(
    '/user/delete/{id}',
    [UserController::class, 'Destroy']
);

Route::get(
    '/user/create',
    [UserController::class, 'Create']
);

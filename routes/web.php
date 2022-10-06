<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, "index"]);
Route::get('/create', [EventController::class, "create"]);
Route::get('/events/{id}', [EventController::class, "show"]);
Route::post('/events', [EventController::class, 'store']);


Route::get('/entrar', [EventController::class, "login"]);
Route::get('/cadastrar', [EventController::class, "register"]);


Route::get('/contact', function () {
    return view('Contact');
});



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

//Route::redirect('/', '/chatify');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/clear', function() {
    $clearCache = Artisan::call('cache:clear');
    $configCache = Artisan::call('config:cache');
    $viewCache = Artisan::call('view:clear');
    $routeCache = Artisan::call('route:cache');
});

Route::get('/profile/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/profile/friends', [\App\Http\Controllers\FriendsController::class, 'index'])->name('friends')->middleware('auth');
Route::prefix('/chatify')->group( function(){
    Route::redirect('/chatify', '/chatify')->middleware('auth');
});

Auth::routes();


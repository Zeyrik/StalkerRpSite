<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\Product\IndexController as ProductIndex;
use App\Http\Controllers\ShowController as ProductShow;
use App\Http\Controllers\Rule\IndexController as RuleIndex;
use App\Http\Controllers\Fraction\IndexController as FractionIndex;
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
    return view('index');
})->name('main');

Route::get('/lore', function(){
    return view('lore');
})->name("lore");

Route::get('/fractions', [FractionIndex::class, '__invoke'])->name("fraction");

Route::get('/rules', [RuleIndex::class, 'getRule'])->name("rules");

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [IndexController::class, 'logout'])->name('logout');

    Route::get('/profile', function(){
        return view('User.profile');
    })->name("profile");


});
Route::middleware(['admin'])->group(function(){

});
Route::get('/auth/redirect', [IndexController::class, 'login'])->name('login');
Route::get('/auth/callback', [IndexController::class, 'callback']);

Route::get('/shop/{product}', [ProductShow::class, '__invoke'])->name('product');
Route::get('/shop', [ProductIndex::class, '__invoke'])->name("shop");

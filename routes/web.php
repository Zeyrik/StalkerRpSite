<?php

use App\Http\Controllers\Fraction\IndexController as FractionIndex;
use App\Http\Controllers\Lore\IndexController as LoreIndex;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Product\IndexController as ProductIndex;
use App\Http\Controllers\Rule\IndexController as RuleIndex;
use App\Http\Controllers\User\IndexController as UserController;
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

Route::get('/', [IndexController::class, 'index'])->name('main');
Route::get('/post/{post}', [IndexController::class, 'show'])->name('post');
Route::get('/guide', function(){
    return view('guide');
})->name("guide");

Route::get('/lore', [LoreIndex::class, '__invoke'])->name("lore");
Route::get('/rules', [RuleIndex::class, 'getRule'])->name("rules");
Route::get('/fractions', [FractionIndex::class, '__invoke'])->name("fraction");



Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/profile', function(){
        return view('User.profile');
    })->name("profile");


});
Route::middleware(['admin'])->group(function(){

});
Route::get('/auth/redirect', [UserController::class, 'login'])->name('login');
Route::get('/auth/callback', [UserController::class, 'callback']);

Route::get('/shop/{product}', [ProductIndex::class, 'show'])->name('product');
Route::get('/shop', [ProductIndex::class, 'index'])->name("shop");


Route::get('/{notFound}', function(){
    return redirect()->route('main');
});
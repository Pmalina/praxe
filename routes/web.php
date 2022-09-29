<?php

use App\Http\Controllers\GuitarsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');;
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');;


Route::resource('guitars', GuitarsController::class);
Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)) {

        if (isset($item)) {
            return "You are viewing the stone for {$category} for {$item}";
        }
        return 'you are viewing the store for ' . strip_tags($category);
    }

    return ('you are viewing all instruments');
});
    //Route::get('/market', function () {
    //$category = request('category');

    //if (inser($category) {
       // return 'you are viewing the stone for' . strip_tags($category)
   // }

   // return 'you are viewing all instruments'

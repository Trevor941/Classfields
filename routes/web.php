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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/user/area/{area}', [App\Http\Controllers\User\AreaController::class, 'store'])->name('user.area.store');
Route::get('/country', [App\Http\Controllers\HomeController::class, 'country']);

Route::group(['prefix' => '/{area}'], function(){


    Route::group(['prefix' => '/categories'], function(){
         Route::get('/', [App\Http\Controllers\Category\CategoryController::class, 'index'])->name('category.index');

         Route::group(['prefix' => '/{category}', function (){
             Route::get('/listings', [App\Http\Controllers\Listing\ListingController::class, 'index'])->name('listings.index');
         }]);
    });
});
<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/',[StaticController::class, 'index'] )-> name('home.index');

Route::get('/about', [StaticController::class, 'about'])-> name('home.about');

Route::get('/contact', [StaticController::class, 'contact'])-> name('home.contact');

Route::resource('computers', ComputersController::class);



// Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {

//     if ($category && $item) {
//         // return view('/store', ['category' => $category, 'item' => $item]);
//         return "<h1>Category: $category, Item: $item</h1>";
//     } elseif ($category) {   
//         // return view('/store', ['category' => $category]);
//         return "<h1>Category: $category</h1>";
//     } else {
//         // return view('/store');
//         return "<h1>Store</h1>";
//     }
// });

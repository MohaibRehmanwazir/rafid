<?php

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
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/post', function () {
    return view('post');
})->name('mypost');

Route::redirect('/about','/test');



// Route::get('/post/{id?}/comment/commentid', function (string $id, string $comment) {
//     if($id){
//         return "<h1>post ID : ". $id . "</h1></h2>";
//     }else{
//      return "<h1>Not ID Found</h1>";
//     }
// })->where('id', '[0-9]+')->whereAlpha();




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

//Sama dengan line 16
// Route::view('/', 'welcome');

// Route::get("/foo", function() {
//     return "Hello World";
// });

// Route::get("/user/{id}", function($id) {
//     return "Welcome user with id ". $id;
// });

// Route::get("/username/{name?}", function($name = 'Joshua') {
//     return "Hi ". $name. ", How are you?";
// });

// Route::get("user", function($id) {
//     return "Welcome user with id ". $id;
// })->name('user');
// $url = route('user', ['id' => 1]);

Route::get('greeting', function() {
    return view('welcome', ['name' => 'Samantha']);
});

Route::view('/', 'home');

Route::get('/catalog/{menu?}', function($menu = '') {
    return view('home');
});

Route::get('/{menu}/{id}', function($menu, $id) {
    return view('detail', ['type' => $menu, 'id' => $id]);
});


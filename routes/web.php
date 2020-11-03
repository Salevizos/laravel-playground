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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {

    return view('welcome');
});

Route::get('/test', function () {

   return view('test');

});

Route::get('/posts/{post}', function ($post) {
    $posts  = [
        '1' => 'hi, this is a first post!',
        '2' => 'now, im getting the hang of this damn thing.'

    ];
    if (!array_key_exists($post, $posts))  {
        abort(404, 'Sorry, nothing here yet.');
    }

    return view('test', [
        'post' => $posts[$post]
    ]);
});
*/
Route::get('/posts/{post}', 'PostsController@show');
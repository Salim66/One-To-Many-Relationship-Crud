<?php

use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| ONE TO MANY RELATIONSIP
|--------------------------------------------------------------------------
*/

Route::get('/create', function(){

    $user = User::findOrFail(1);
    // $post = new Post(['title'=>'This is one to many relationship title', 'body'=>'Body of the one to many relationship just awesome']);
    $user->posts()->save(new Post(['title'=>'This is one to many relationship title', 'body'=>'Body of the one to many relationship just awesome']));

});

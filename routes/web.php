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
    $user->posts()->save(new Post(['title'=>'This is one to many relationship title 22', 'body'=>'Body of the one to many relationship just awesome 22']));

});

Route::get('/read', function(){

    $user = User::findOrFail(1);
    foreach($user->posts as $post){
        echo $post->title . "<br>";
    }

});

Route::get('/update', function(){

    $user = User::findOrFail(1);
    // $user->posts()->where('id', 1)->update(['title' => 'I love laravel', 'body' => 'This is Salim, thank you so much']);
    $user->posts()->whereId(1)->update(['title' => 'I love laravel', 'body' => 'This is Salim, thank you so much']);

});

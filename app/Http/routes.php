<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('getposts/{pageNo}','PostsController@getPosts');
Route::get('getparagraphs/{postId}','PostsController@getParagraphsOfPost');
Route::post('createpost','PostsController@createPost');
Route::post('addcomment','PostsController@addComment');
Route::post('addparagraph','PostsController@addParagraph');

<?php

Route::get('users', 'ApiPublic\UserController@index');
Route::get('users/getPosts/{id}', 'ApiPublic\PostController@show');

Route::get('users/getArticles/{id}', 'ApiPublic\UserArticleController@show');

Route::resource('meetups', 'ApiPublic\MeetupController@index');
Route::resource('articles', 'ApiPublic\ArticleController');

Route::get('postcards', 'ApiPublic\PostcardController@index');

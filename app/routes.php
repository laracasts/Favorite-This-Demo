<?php

// Simulate a logged in user
Auth::loginUsingId(5);

Route::get('/', function()
{
    $posts = Post::all();

    return View::make('posts.index', compact('posts'));
});

Route::get('users/{id}/favorites', function ($userId)
{
    $posts = User::findOrFail($userId)->favorites;

    return View::make('posts.index', compact('posts'));
});

Route::post('favorites', ['as' => 'favorites.store', function()
{
    Auth::user()->favorites()->attach(Input::get('post-id'));

    return Redirect::back();
}])->before('auth|csrf');

Route::delete('favorites/{postId}', ['as' => 'favorites.destroy', function($postId)
{
    Auth::user()->favorites()->detach($postId);

    return Redirect::back();
}])->before('auth|csrf');

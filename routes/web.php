<?php

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

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', [
        'uses'=>'HomeController@index',
        'as'=>'home'
    ]);

    Route::get('/post/create', [
        'uses'=>'PostsController@create',
        'as'=> 'post.create'
    ]);

    
    Route::post('/post/store', [
        'uses'=>'PostsController@store',
        'as'=> 'post.store'
    ]);

    Route::get('/post/delete/{id}', [
        'uses'=>'PostsController@destroy',
        'as'=> 'post.delete'
    ]);

    Route::get('/posts', [
        'uses'=>'PostsController@index',
        'as'=>'posts'
    ]);

    Route::get('/posts/trashed', [
        'uses'=>'PostsController@trashed',
        'as'=>'posts.trashed'
    ]);
    Route::get('/post/kill/{id}', [
        'uses'=>'PostsController@kill',
        'as'=> 'post.kill'
    ]);
    Route::get('/post/restore/{id}', [
        'uses'=>'PostsController@restore',
        'as'=> 'post.restore'
    ]);
    Route::get('/post/edit/{id}', [
        'uses'=>'PostsController@edit',
        'as'=> 'post.edit'
    ]);
    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);
    Route::get('/catagory.create', [
        'uses'=>'CatagoriesController@create',
        'as'=>'catagory.create'
    ]);
    Route::get('/catagories', [
        'uses'=>'CatagoriesController@index',
        'as'=>'catagories'
    ]);

    Route::post('/catagory.store', [
        'uses'=>'CatagoriesController@store',
        'as'=>'catagory.store'
    ]);
    Route::get('/catagory/edit/{id}', [
        'uses'=>'CatagoriesController@edit',
        'as'=>'catagory.edit'
    ]);
    Route::get('/catagory/delete/{id}', [
        'uses'=>'CatagoriesController@destroy',
        'as'=>'catagory.delete'
    ]);

    Route::post('/catagory/update/{id}', [
        'uses'=>'CatagoriesController@update',
        'as'=>'catagory.update'
    ]);

});


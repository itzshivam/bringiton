<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
    //
    Route::auth();


    //topics route returns topics

    // Route::get('/login',function()
    //     {
    //         return view('layouts/app');
    //     });


    Route::get('/topics',function()
    	{
    	return "topics goes here";
    	});

    //route for getting particular topic
    Route::get('/topics/{topic_name}',function($topic_name)
    	{
    		return "topic is ".$topic_name;
   		});

    //route for playing the topic
     Route::get('/topics/{topic_name}/play',function($topic_name)
   		{
    		return "topic  ".$topic_name . " is playing ";
    	});

     // route for home page
    Route::get('/','HomeController@index');

    //route for profile page
    Route::get('profile/{username}',function($username)

    	{	
    		return "profile of ".$username;
    	});

    Route::get('create_new_topic',function()
    	{
    		return "create topic here";
    	});

    Route::get('add_new_topic',function()
   		 {
    		return "admin adds topic here";
   		 });
    
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

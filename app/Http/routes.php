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

//测试博客内容
Route::get('/test',function(){
    return view('Test');
});

Route::get('/content', function () {
    return view('TestContent');
});


//正式博客
Route::get('/featured',function(){
    return view('main/featured');
});

Route::get('/featured/{id}',function(){
    return view('main/featured_detail');
});

Route::get('/login',function(){
   return view('main/login');
});

Route::get('/register',function(){
   return view('main/regist');
});

Route::get('/newpassword',function(){
   return view('main/newpassword');
});

Route::get('/events',function(){
   return view('main/events');
});
Route::get('/events/{id}',function(){
    return view('main/events_detail');
});

Route::get('/wareplus', function(){
   return view('main/wareplus');
});

Route::get('/wareplus/{id}', function(){
    return view('main/wareplus_detail');
});

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' =>'users','namespace' => 'UserCenter'],function() {
    Route::get('edit_profile', function () {
        return view('main/user_edit_profile');
    });

    Route::get('edit_password', function () {
        return view('main/user_edit_password');
    });
});


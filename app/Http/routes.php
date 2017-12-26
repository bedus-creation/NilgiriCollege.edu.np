<?php


Route::get('/', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/admin/upload/image','AdminController@uploadImage');

Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin',function(){
        return view('admin.dashboard');
    });
    Route::get('/admin/create-post',function(){
        return view('admin.create-post');
    });
    
    
    Route::get('/admin/edit-post/','AdminController@getEditPost');
    Route::get('/admin/edit-post/{title}','AdminController@getEditPost'); 
    Route::get('/admin/all-post','AdminController@getAllPost');    
    Route::post('/admin/upload/image','AdminController@uploadImage');
    Route::post('/admin/create-post/submit','AdminController@createPost');
    Route::post('/admin/edit-post/update','AdminController@editPost');
    Route::get('/admin/search/{q}','SearchController@getSearch');
    Route::get('/admin/action/publish/{id}','AdminController@actionPublish');
    Route::get('/admin/action/delete/{id}','AdminController@actionDelete');
});


Route::get('/auth/login','LoginController@getLogin');
Route::get('/auth/signup','LoginController@getSignup');
Route::post('/auth/login/submit','LoginController@login');
Route::post('/auth/signup/submit','LoginController@createUser');
Route::get('/auth/logout','UserController@getLogout');

Route::get('/inform/notice','PostController@allPost');
Route::get('/inform/notice/{post}','PostController@getPost');
Route::get('/inform/news','PostController@allNews');
Route::get('/inform/news/{news}','PostController@getNews');

Route::get('/extra/aboutus','ExtraController@getAboutUs');
Route::get('program/b-tech-food','ExtraController@getProgramBtech');




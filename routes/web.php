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

Route::group(['middleware' => 'usersession'], function () {
    //manage blogs
    Route::get('/manageBlog', 'admin\PostController@index')->name('blog.index');
    Route::get('/postBlog', 'admin\PostController@create')->name('blog.create');
    Route::post('/addBlog', 'admin\PostController@store')->name('blog.store');
    Route::post('/deletePost', 'admin\PostController@removePost')->name('blog.delete');
    Route::get('/editBlog/{id}', 'admin\PostController@showBlog')->name('blog.show'); //load the blog to edit
    Route::post('/updateBlog/{id}', 'admin\PostController@update')->name('blog.update');

    //manage job
    Route::get('/listJobs', 'admin\JobPostController@index')->name('job.index');
    Route::get('/editJob/{id}', 'admin\JobPostController@edit')->name('job.edit');
    Route::post('/updateJob/{id}', 'admin\JobPostController@update')->name('job.update');
    Route::post('/deleteJob', 'admin\JobPostController@delete')->name('job.delete');
    Route::get('/postJob', 'admin\JobPostController@create')->name('job.create');
    Route::post('/addJob', 'admin\JobPostController@store')->name('job.store');
});

//Admin login
Route::get('/adminLogin', 'admin\Auth\AdminLoginController@index')->name('login');
Route::get('/adminLogout', 'admin\Auth\AdminLoginController@logout')->name('logout');
Route::post('/adminAuth', 'admin\Auth\AdminLoginController@login')->name('admin.auth');


//FrontEnd
Route::get('/', 'LandingPageController@getPageContents')->name('index');

//BlogDetails
Route::get('/blog', 'BlogController@index')->name('blogs.index');
Route::get('/blog/{id}', 'BlogController@details')->name('blogs.details');
Route::post('/blog/{id}', 'BlogController@store')->name('blog.store');
Route::get('/blog/{month}/{year}', 'BlogController@getBlogList')->name('blogs.list');

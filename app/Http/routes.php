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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});



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



Route::group(['middleware' => 'web'], function () {


    //Route::get('/home', 'HomeController@index');



    /*
     |--------------------------------------------------------------------------
     | Member Routes
     |--------------------------------------------------------------------------
     |
     | Routes for internal Member users of application
     |
     */

    $member = [
        'namespace' => 'Member',
        'prefix' => config('route.prefix.member'),
        // 'middleware' => 'auth'
    ];

    Route::group($member, function () {

        //Route::get('/', function () {
        //    return view('home.index');
        //});
        Route::get('/','MemberController@index');
        Route::get('/login','MemberController@login');
        //Route::auth();


    });




    /*
     |--------------------------------------------------------------------------
     | Admin Routes
     |--------------------------------------------------------------------------
     |
     | Routes for internal admin users of application
     |
     */

    $admin = [
        'namespace' => 'Admin',
        'prefix' => config('route.prefix.admin'),
       // 'middleware' => 'admin.auth'
    ];

    Route::group($admin, function () {

        //Route::get('/', function () {
        //    return view('admin.home');
        //});
        //Route::auth();
        Route::get('/','AdminController@index');
        Route::get('/login','AdminController@login');

        Route::controllers([
            'auth' => 'Auth\AuthController',
            'password' => 'Auth\PasswordController',
        ]);

    });


});



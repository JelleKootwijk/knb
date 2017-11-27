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

Route::get('/statistics', function(){
    $houses = \App\House::all();
    return view('statistics', compact('houses'));
});


Route::get('/house-selection', 'HouseController@selection');
Route::get('/', 'HomeController@index')->name('home');
Route::get('forum', 'HomeController@forum')->name('forum');

// Authentication Routes...
Route::get('login', function(){
    return redirect('/amoclient/redirect');
})->name('login');

if (\App::environment('local')) {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
}

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', function(){

    \Auth::logout();
    return redirect('https://login.amo.rocks/logout');


})->name('logout');


if (\App::environment('local')) {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
}

// Registration Routes...
if (\App::environment('local'))
{
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'auth'], function() {


    Route::group(['middleware' => 'headmaster'], function(){

        Route::post('dashboard/csv/upload', 'ImportController@upload')->name('upload');
        Route::post('dashboard/csv/gradesUpload', 'ImportController@bulkPointsUpload');
        Route::post('dashboard/user/registration', 'ImportController@singleRegistration');

        Route::get('/start-house-selection', 'HouseController@doSelection');
        Route::get('/dashboard/import', 'DashboardController@import')->name('import');
        Route::get('/dashboard/points', 'DashboardController@points')->name('points');
        Route::get('dashboard/news', 'DashboardController@news')->name('news');
        Route::get('/dashboard/badges', 'DashboardController@badges')->name('badges');
        Route::post('/dashboard/badges/toggle', 'BadgesController@toggle');

        Route::post('/post/{post}/lock', 'PostController@Lock');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        // allocate points from dashboard
        Route::post('/dashboard/points/', 'PointsController@allocate');
    });

    Route::resource('message', 'MessageController');

    Route::get('/game-info', 'HomeController@gameInfo');
    Route::get('/about', 'HomeController@about')->name('story');

    Route::get('/profile/password', 'UsersController@edit');
    Route::get('/profile/{user}', 'UsersController@show')->name('profile');
    Route::put('/profile/password', 'UsersController@changePassword')->name('change-password');

    Route::post('/message/allread', 'MessageController@checkAllRead');

    Route::get('/home', 'HomeController@index');
    Route::get('/learn', 'HomeController@learn');
    Route::get('/learn/{name}', 'HomeController@details');
    Route::get('/request-badge', 'HomeController@badgeRequest')->name('request-badge');
    Route::post('/request-badge', 'BadgesController@request')->name('post-request-badge');

    Route::resource('house', 'HouseController');

    Route::post('post/{post}/flag', 'PostController@flag');
    Route::post('post/{post}/unflag', 'PostController@unflag');
    Route::post('post/{post}/vote', 'PostController@vote');
    Route::put('post/{post}/accept', 'PostController@accept');
    Route::get('post/filter', 'PostController@filter');
    Route::get('post/search', 'PostController@search');
    Route::put('answer/{post}/edit', 'PostController@updateAnswer');
    Route::get('answer/{post}', 'PostController@editAnswer');

    Route::get('post/{post}/answer', 'PostController@answer')->name('answer');

    Route::resource('post', 'PostController');

    Route::resource('news','NewsController');

    Route::resource('comment', 'CommentController');

    Route::get("amoclient/ready", 'UsersController@callBack');

});

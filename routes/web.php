<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/coba', function () {
    // $data = Post::all();
    return view('coba');
});

Route::post('/coba', function (Request $request) {
    dd($request->file('thing')->store('','google'));
});

Auth::routes();

Route::get('/home',  'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/home',  'AdminController@index')->name('home.admin');
    Route::get('/profile',  'AdminController@profile')->name('admin.profile');
    Route::get('/karya/create',  'AdminController@karyaCreate')->name('admin.tambah.karya');
    Route::get('/user',  'AdminController@user')->name('admin.user');
    Route::get('/karya',  'AdminController@karya')->name('admin.karya');
    Route::get('/karya/{post}',  'AdminController@karya')->name('post.show');
    //Route::get('/event',  'AdminController@event')->name('event.admin');
    Route::post('/juri',  'AdminController@juriStore')->name('user.juri.store');
    Route::post('/juri-event',  'EventController@eventJuri')->name('event.juri');
    Route::post('/karya',  'PostController@store')->name('karya.post');
    Route::delete('/user/{user}',  'AdminController@userDestroy')->name('user.destroy');
    Route::delete('/karya/{post}',  'PostController@destroy')->name('post.destroy');
    Route::put('/karya/{post}',  'PostController@updateStatus')->name('post.update.status');
    Route::resource('event', 'EventController');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/profile/{user}',  'UserController@updateProfile')->name('user.update');
    Route::put('/profile/image/{user}',  'UserController@updateImage')->name('user.update.image');
    Route::put('/profile/password/{user}',  'UserController@updatePassword')->name('user.update.password');
});

Route::group(['prefix' => 'juri', 'middleware' => 'juri'], function(){
    Route::get('/',  'JuriController@index')->name('home.juri');
    Route::get('/event',  'JuriController@event')->name('juri.event');
    Route::get('/event/{event}',  'JuriController@eventShow')->name('juri.event.show');
    Route::get('/profile',  'JuriController@profile')->name('juri.profile');
});


// Login Google
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback',  'Auth\LoginController@handleGoogleCallback');

// login facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback',  'Auth\LoginController@handleFacebookCallback');

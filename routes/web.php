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
    return view('index');
})->name('homepage');
Auth::routes();
Route::get('/home','HomeController@index');



Route::resource('mgbidi-2019', 'MgbidiController');
Route::get('/mgbidi-registration','MgbidiController@index')->name('regmem');
Route::get('/downloadPDF/{id}','MgbidiController@downloadPDF')->name('download');
Route::resource('songs', 'SongPresentationCOntroller');
Route::get('/write_song', 'SongPresentationCOntroller@create')->name('create');

Route::get('/about_us', 'AboutCOntroller@index')->name('about');

Route::get('profile', 'UserController@profile')->name('profile');
Route::get('mysongs', 'SongPresentationCOntroller@mysongs')->name('withsonginprofile');
Route::post('profile', 'UserController@update_avatar');

//For the Admin Controller
Route::get('/admin', 'HomeController@admin')->middleware('admin');
Route::resource('/dashboard','AdminController');
Route::get('/dashboard','AdminController@index')->name('adminhome');
Route::get('/admin/allmembers','AdminController@allmembers')->name('allmembers');
Route::get('/admin/allsongs','AdminController@allsongs')->name('allsongs');
Route::get('/admin/mgbidi2019','AdminController@mgbidi2019')->name('mgbidi2019');
Route::get('/admin/user','AdminController@user')->name('user');
Route::get('/admin/deleteuploadedimages','AdminController@delup')->name('delup');


//image-gallery


Route::resource('image-gallery', 'ImageGalleryController');
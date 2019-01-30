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
//for User Controller



Route::get('mysongs', 'SongPresentationCOntroller@mysongs')->name('withsonginprofile');
Route::post('profile', 'UsersController@update_avatar');

//For the Admin Controller
Route::get('/admin', 'HomeController@admin')->middleware('admin');
Route::resource('/dashboard','AdminController');
Route::get('/admin_profile','AdminController@userprofile')->name('user');
Route::get('/dashboard','AdminController@index')->name('adminhome');
Route::get('/admin/allmembers','AdminController@allmembers')->name('allmembers');
Route::get('/admin/allsongs','AdminController@allsongs')->name('allsongs');
Route::get('/admin/mgbidi2019','AdminController@mgbidi2019')->name('mgbidi2019');
//For Geopolitical REgion
Route::get('/admin/allzone','AdminController@geopoliticalzone')->name('gzone');
Route::get('/admin/northstate','AdminController@north')->name('northern_zone');
Route::get('/admin/eaststate','AdminController@east')->name('south_east');
Route::get('/admin/weststate','AdminController@west')->name('south_west');
Route::get('/admin/southstate','AdminController@south')->name('south_south');
//For Eastern States
Route::get('/admin/abia','AdminController@abia')->name('Abia');
Route::get('/admin/ebonyi','AdminController@ebonyi')->name('Ebonyi');
Route::get('/admin/enugu','AdminController@enugu')->name('Enugu');
Route::get('/admin/anambra','AdminController@anambra')->name('Anambra');
Route::get('/admin/imo','AdminController@imo')->name('Imo');
//For Northern States
Route::get('/admin/benue','AdminController@benue')->name('Benue');
Route::get('/admin/kogi','AdminController@kogi')->name('Kogi');
Route::get('/admin/kwara','AdminController@kwara')->name('Kwara');
Route::get('/admin/nassarawa','AdminController@nassarawa')->name('Nassarawa');
Route::get('/admin/niger','AdminController@niger')->name('Niger');
Route::get('/admin/plateau','AdminController@plateau')->name('Plateau');
Route::get('/admin/abuja','AdminController@abuja')->name('Abuja');
Route::get('/admin/adamawa','AdminController@adamawa')->name('Adamawa');
Route::get('/admin/bauchi','AdminController@bauchi')->name('Bauchi');
Route::get('/admin/borno','AdminController@borno')->name('Borno');
Route::get('/admin/gombe','AdminController@gombe')->name('Gombe');
Route::get('/admin/taraba','AdminController@taraba')->name('Taraba');
Route::get('/admin/yobe','AdminController@yobe')->name('Yobe');
Route::get('/admin/jigawa','AdminController@jigawa')->name('Jigawa');
Route::get('/admin/kaduna','AdminController@kaduna')->name('Kaduna');
Route::get('/admin/kano','AdminController@kano')->name('Kano');
Route::get('/admin/kastina','AdminController@kastina')->name('Katsina');
Route::get('/admin/kebbi','AdminController@kebbi')->name('Kebbi');
Route::get('/admin/sokoto','AdminController@sokoto')->name('Sokoto');
Route::get('/admin/zamfara','AdminController@zamfara')->name('Zamfara');
Route::get('/admin/illorin','AdminController@illorin')->name('illorin');

// for western states

Route::get('/admin/lagos','AdminController@lagos')->name('Lagos');
Route::get('/admin/ekiti','AdminController@ekiti')->name('Ekiti');
Route::get('/admin/ogun','AdminController@ogun')->name('Ogun');
Route::get('/admin/ondo','AdminController@ondo')->name('Ondo');
Route::get('/admin/osun','AdminController@osun')->name('Osun');
Route::get('/admin/oyo','AdminController@oyo')->name('Oyo');

// for South South states
Route::get('/admin/akwa-ibom','AdminController@akwaibom')->name('Akwa-ibom');
Route::get('/admin/bayelsa','AdminController@bayelsa')->name('Bayelsa');
Route::get('/admin/cross-river','AdminController@crossriver')->name('Cross-River');
Route::get('/admin/delta','AdminController@delta')->name('Delta');
Route::get('/admin/edo','AdminController@edo')->name('Edo');
Route::get('/admin/rivers','AdminController@rivers')->name('Rivers');





//for blog
Route::resource('post','PostsController');
Route::get('/posts', 'PostsController@index')->name('blog');
Route::get('/posts/create', 'PostsController@create')->name('makeblog');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');




// APP Routes Below

Route::get('/podcast', 'PodcastsController@index')->name('podcast');
Route::get('/podcasts/player', 'PodcastsController@index');
Route::get('/podcasts/manage', 'PodcastsController@manage')->name('managepodcast');
Route::get('/podcasts/favorites', 'PodcastsController@favorites');
Route::get('/podcasts/settings', 'PodcastsController@settings');
Route::get('/podcasts/auto-update', function () {
	$exitCode = Artisan::call('updatePodcastItems');
	if ($exitCode == 0) {
		return redirect('podcasts/player');
	}
});
Route::resource('/podcasts', 'PodcastsController');
Route::get('/podcast/search', 'PodcastItemsController@search');
Route::post('/podcast/mark-as-read', 'PodcastItemsController@markAsRead');
Route::post('/podcast/mark-as-favorite', 'PodcastItemsController@markAsFavorite');
Route::post('/podcast/mark-all-prev-read', 'PodcastItemsController@markAllPrevAsRead');











Route::get('/admin/deleteuploadedimages','AdminController@delup')->name('delup');


//image-gallery


Route::resource('image-gallery', 'ImageGalleryController');
//for User Controller
Route::resource('users','UsersController');


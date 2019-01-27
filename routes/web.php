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
});
Auth::routes();
Route::get('/home','HomeController@index' )->name('home');



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
Route::get('/admin/northstate','AdminController@north')->name('north');
Route::get('/admin/eaststate','AdminController@east')->name('east');
Route::get('/admin/weststate','AdminController@west')->name('west');
Route::get('/admin/southstate','AdminController@south')->name('south');
//For Eastern States
Route::get('/admin/abia','AdminController@abia')->name('abia');
Route::get('/admin/ebonyi','AdminController@ebonyi')->name('ebonyi');
Route::get('/admin/enugu','AdminController@enugu')->name('enugu');
Route::get('/admin/anambra','AdminController@anambra')->name('anambra');
Route::get('/admin/imo','AdminController@imo')->name('imo');
//For Northern States
Route::get('/admin/benue','AdminController@benue')->name('benue');
Route::get('/admin/kogi','AdminController@kogi')->name('kogi');
Route::get('/admin/kwara','AdminController@kwara')->name('kwara');
Route::get('/admin/nassarawa','AdminController@nassarawa')->name('nassarawa');
Route::get('/admin/niger','AdminController@niger')->name('niger');
Route::get('/admin/plateau','AdminController@plateau')->name('plateau');
Route::get('/admin/abuja','AdminController@abuja')->name('abuja');
Route::get('/admin/adamawa','AdminController@adamawa')->name('adamawa');
Route::get('/admin/bauchi','AdminController@bauchi')->name('bauchi');
Route::get('/admin/borno','AdminController@borno')->name('borno');
Route::get('/admin/gombe','AdminController@gombe')->name('gombe');
Route::get('/admin/taraba','AdminController@taraba')->name('taraba');
Route::get('/admin/yobe','AdminController@yobe')->name('yobe');
Route::get('/admin/jigawa','AdminController@jigawa')->name('jigawa');
Route::get('/admin/kaduna','AdminController@kaduna')->name('kaduna');
Route::get('/admin/kano','AdminController@kano')->name('kano');
Route::get('/admin/kastina','AdminController@kastina')->name('kastina');
Route::get('/admin/kebbi','AdminController@kebbi')->name('kebbi');
Route::get('/admin/sokoto','AdminController@sokoto')->name('sokoto');
Route::get('/admin/zamfara','AdminController@zamfara')->name('zamfara');

// for western states

Route::get('/admin/lagos','AdminController@lagos')->name('lagos');
Route::get('/admin/ekiti','AdminController@ekiti')->name('ekiti');
Route::get('/admin/ogun','AdminController@ogun')->name('ogun');
Route::get('/admin/ondo','AdminController@ondo')->name('ondo');
Route::get('/admin/osun','AdminController@osun')->name('osun');
Route::get('/admin/oyo','AdminController@oyo')->name('oyo');

// for South South states
Route::get('/admin/akwa-ibom','AdminController@akwaibom')->name('akwaibom');
Route::get('/admin/bayelsa','AdminController@bayelsa')->name('bayelsa');
Route::get('/admin/cross-river','AdminController@crossriver')->name('crossriver');
Route::get('/admin/delta','AdminController@delta')->name('delta');
Route::get('/admin/edo','AdminController@edo')->name('edo');
Route::get('/admin/rivers','AdminController@rivers')->name('rivers');





//users profile
Route::get('user/{id}','UsersController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UsersController@user_posts')->where('id', '[0-9]+');




// APP Routes Below for podcast
Route::get('/', 'PodcastsController@index');
Route::get('/podcast', 'PodcastsController@index');
Route::get('/podcasts/player', 'PodcastsController@index');
Route::get('/podcasts/manage', 'PodcastsController@manage');
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

//for blog
Route::get('/posts', 'PostsController@index')->name('blog');
Route::get('/posts/create', 'PostsController@create')->name('makeblog');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');
















Route::get('/admin/deleteuploadedimages','AdminController@delup')->name('delup');


//image-gallery


Route::resource('image-gallery', 'ImageGalleryController');
//for User Controller
Route::resource('users','UsersController');
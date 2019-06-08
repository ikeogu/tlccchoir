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
use App\Noe_Team;
use App\ShortList;


	Route::get('/', function () {
		return view('index');
	})->name('homepage');
	Route::get('/noe_2019', function () {
		$team = Noe_Team::with('musics'); 
		$teams = ShortList::all();       
        return view('Noe2019/index', compact('team','teams'));
	})->name('noe');

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




//blog
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
        ->where('slug', '[\w\d\-\_]+');


Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);


//home page
Route::get('/blog', 'PagesController@getIndex')->name('blog');

//posts
Route::resource('posts', 'PostController');
Route::get('/posts/create', 'PostController@create')->name('makeblog');

//categories
Route::resource('categories', 'CategoryController');


//tags
Route::resource('tags', 'TagController');

//Comments
Route::post('comment/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comment.store']);



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

// contact us form
Route::get('/contact', 'ContactController@show')->name('show');
Route::post('/contacts',  'ContactController@mailToAdmin')->name('postmessage');









Route::get('/admin/deleteuploadedimages','AdminController@delup')->name('delup');


//image-gallery


Route::resource('image-gallery', 'ImageGalleryController');
//for User Controller
Route::resource('users','UsersController');
// for noe admin
Route::resource('short_list','ShortListController');
Route::resource('noe_team','NoeTeam');

Route::get('noe_admin','NoeTeam@admin')->name('admin');
Route::get('all_team','NoeTeam@allteam')->name('allteam');

Route::post('short_list','ShortListController@store')->name('shortlist');


Route::get('noe_teams','NoeTeam@index');
Route::get('noe_team/{key}','NoeTeam@show');
Route::post('noe_team','NoeTeam@store')->name('reg');

Route::put('noe_team','NoeTeam@store');
Route::delete('noe_tea/{key}','NoeTeam@destroy')->name('del');
ROute::post('acapella_music','MusicController@store')->name('aca');
ROute::post('african_con_music','MusicController@store_con')->name('con');
ROute::post('african_class_music','MusicController@store_class')->name('cla');
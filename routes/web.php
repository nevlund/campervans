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
    $posts = App\Post::all()->take(4);
    $ads = App\Ad::all()->take(4);
    return view('index', compact('posts', 'ads'));
});

Route::get('annoncer', function () {
    $ads = App\Ad::all();
    return view('annoncer', compact('ads'));
});



// Listings page
Route::get('annoncer', 'AdsController@index')->name('annoncer');

// Search function
//Route::get('annoncer', 'AdsController@search')->name('annoncer');

// Blog page
Route::get('blog', function () {
    $posts = App\Post::all();
    return view('blog', compact('posts'));
});

// About us page
Route::get('omos', 'PublicController@omos')->name('omos');

// Listings
Route::resource('ads', 'AdsController');

// Detailview
Route::get('annoncedetajle/{id}', 'AdsController@show')->name('annoncedetalje');

Route::resource('listcategories', 'ListcategoriesController');

// Contact us page
Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});


Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/create/', 'AdminController@create')->name('create');

	// Create listing data - send to database
    Route::post('/createlisting/', 'AdminController@createListingForm')->name('createlisting');

    // Show edit form for user
    Route::get('/edit_user/', 'UserController@edit')->name('edit_user');
    Route::post('/edit_user/', 'UserController@update')->name('update_user');

    // Update user form page
    //Route::post('/update_usert/{id}', 'AdminController@updateUser')->name('update_user');

	// List listings in the admin panel
	Route::get('/visannoncer/', 'AdminController@dashboard')->name('visannoncer');

	// Show edit form for ads
    Route::get('/edit_ad/{id}', 'AdminController@editListing')->name('edit_ad');

    // Update product
    Route::post('/update_ad/{id}', 'AdminController@updateAd')->name('update_ad');

    // Delete listings
    Route::get('/deletlisting/{id}', 'AdminController@deleteListing')->name('deleteListing');



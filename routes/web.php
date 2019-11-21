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
    $posts = App\Post::all();
    $classifieds = App\Classified::all();
    return view('index', compact('posts', 'classifieds'));
});

Route::get('annoncer', function () {
    $classifieds = App\Classified::all();
    return view('annoncer', compact('classifieds'));
});



// Listings page
Route::get('annoncer', 'ClassifiedsController@index')->name('annoncer');

// Blog page
Route::get('blog', function () {
    $posts = App\Post::all();
    return view('blog', compact('posts'));
});

// About us page
Route::get('omos', 'PublicController@omos')->name('omos');

// Listings
Route::resource('classifieds', 'ClassifiedsController');

// Detailview
Route::get('annoncedetajle/{id}', 'ClassifiedsController@detailView')->name('annoncedetalje');

Route::resource('listcategories', 'ListcategoriesController');

// Contact us page
Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/create/', 'AdminController@create')->name('create');

	// Create listing data - send to database
    Route::post('/createlisting/', 'AdminController@createListingForm')->name('createlisting');

	// List listings in the admin panel
	Route::get('/visannoncer/', 'AdminController@dashboard')->name('visannoncer');

	// Show edit form for listings
    Route::get('/adminEditListing/{id}', 'AdminController@editListing')->name('adminEditListing');

    // Delete listings
    Route::get('/deletlisting/{id}', 'AdminController@deleteListing')->name('deleteListing');



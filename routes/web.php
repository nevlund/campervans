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
    return view('index', compact('posts'));
});

Route::get('annoncer', function () {
    $posts = App\Classified::all();
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
Route::get('/create/', 'HomeController@create')->name('create');



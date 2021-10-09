<?php
use App\Events\WebsocketDemoEvent;
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
	//broadcast(new WebsocketDemoEvent('some data'));
    return view('welcome');
});
Auth::routes();

Route::get('/test', 'HomeController@authRedirect');

//Route::get('/chats', 'ChatsController@index');


Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('/home', 'HomeController@index')->name('home');
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
		Route::get('prospects', ['as' => 'pages.prospects', 'uses' => 'PageController@prospects']);
		Route::get('findleads/{id?}', ['as' => 'pages.findleads', 'uses' => 'PageController@findleads']);
		Route::get('contact/{id}', ['as' => 'pages.contact', 'uses' => 'PageController@getContact']);
		Route::post('save', ['as' => 'pages.save', 'uses' => 'PageController@store']);
		Route::get('email_campaign', ['as' => 'pages.email_campaign', 'uses' => 'PageController@email_campaign']);
		Route::get('contactlist', ['as' => 'pages.contactlist', 'uses' => 'PageController@contactlist']);
		Route::get('compose_email', ['as' => 'pages.compose_email', 'uses' => 'PageController@compose_email']);
		Route::get('inbox', ['as' => 'pages.inbox', 'uses' => 'PageController@inbox']);
		Route::post('email', ['as' => 'pages.email', 'uses' => 'API\PlacesController@sendMail']);
		Route::post('email-campaign/save', ['as' => 'pages.save_email_campaign', 'uses' => 'EmailCampaignController@store']);
		Route::put('email-campaign/save', ['as' => 'pages.update_email_campaign', 'uses' => 'EmailCampaignController@store']);
		Route::get('email-campaign/{id}', ['as' => 'pages.show_email_campaign', 'uses' => 'EmailCampaignController@show']);
		Route::delete('email-campaign/{id}', ['as' => 'pages.delete_email_campaign', 'uses' => 'EmailCampaignController@destroy']);
		Route::get('contacted/{id}', ['as' => 'pages.contacted', 'uses' => 'API\PlacesController@contacted']);
		Route::get('emailmanagement', ['as' => 'pages.emailmanagement', 'uses' => 'PageController@emailmanagement']);
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('chats', ['as' => 'pages.chat', 'uses' => 'ChatsController@index']);
    Route::get('messages', ['as' => 'pages.chat', 'uses' => 'ChatsController@fetchMessages']);
    Route::post('messages', ['as' => 'pages.chat', 'uses' => 'ChatsController@sendMessage']);
});
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


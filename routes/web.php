<?php

use App\Http\Controllers\WardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return redirect()->route('home');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/about-us', 'HomeController@about_us');
Route::get('/contact-us', 'HomeController@contact_us');
Route::get('/dnc', 'HomeController@dnc')->name('dnc');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/event/{slug}', 'HomeController@event')->name('event');
Route::get('events/{state}', 'StateActivityController@state_events')->name('events.state');
Route::get('event/{state}/{slug}', 'StateActivityController@state_event')->name('event.state');

// Route::get('/contact-us', function () {
//     return view('frontend.contactus');
// });

// Route::get('/about-us', function () {
//     return view('frontend.aboutus');
// });

Auth::routes(['verify'=>true]);


Route::group(['middleware' => ['auth','verified']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/components', function(){
        return view('components');
    })->name('components');


    // Route::get('state/events', 'StateController@events')->name('state.events');
    // Route::get('state/event/create', 'StateController@create_activities')->name('state.create.events');
    // Route::post('state/events', 'StateController@events')->name('state.events');

    Route::resource('state-event', 'StateActivityController');

    Route::resource('users', 'UserController');

    Route::resource('desk', 'DeskController');

    Route::resource('lga', 'LGAController');

    // Route::get('state/{id}/{lga_id}', 'StateController@edit_data')->name('edit.state.data');

    Route::resource('state', 'StateController');
   
    Route::resource('ward','WardController');

    Route::post('getLga','LGAController@getLga')->name('getLga');

    Route::get('/profile/{user}', 'UserController@profile')->name('profile.edit');

    Route::post('/profile/{user}', 'UserController@profileUpdate')->name('profile.update');

    Route::resource('roles', 'RoleController')->except('show');

    Route::resource('permissions', 'PermissionController')->except(['show','destroy','update']);

    Route::resource('category', 'CategoryController')->except('show');

    Route::resource('post', 'PostController');

    Route::get('/activity-log', 'SettingController@activity')->name('activity-log.index');

    Route::get('/settings', 'SettingController@index')->name('settings.index');

    Route::post('/settings', 'SettingController@update')->name('settings.update');


    Route::get('media', function (){
        return view('media.index');
    })->name('media.index');
});

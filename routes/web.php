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
Route::get('/membership', 'HomeController@membership')->name('membership');
Route::get('/contact-us', 'HomeController@contact_us');
Route::get('/dnc/about', 'HomeController@dnc')->name('dnc_home');
Route::get('/dnc/committee', 'HomeController@dnc_members')->name('dnc_members');
Route::get('/dnc/event', 'HomeController@dnc_event')->name('dnc_post');
Route::get('/dnc/gallery', 'HomeController@dnc_gallery')->name('dnc_gallery');
Route::get('/zonal/state/cord', 'HomeController@zonal_state_cord')->name('zonal_state_cord');
Route::get('states','HomeController@states')->name('states');
Route::get('donate','HomeController@donate')->name('donate');
// Route::get('/dnc/{slug}', 'HomeController@dnc_details')->name('dnc_details');
Route::get('desk/details/{slug}', 'HomeController@desk_more')->name('desk_more');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/event/{slug}', 'HomeController@event')->name('event');
Route::get('/event/category/{category}', 'HomeController@events_catgory')->name('events_catgory');
Route::get('event/{state}/{slug}', 'StateActivityController@state_event')->name('event.state');
Route::get('events/{state}', 'StateActivityController@state_events')->name('events.state');
Route::get('state/lga/{slug}', 'StateActivityController@stateEventslga')->name('state.lga');
Route::get('lga/{slug}/ward', 'HomeController@lgaWard')->name('lga.ward');
Route::get('our-services/{id}','ServiceController@show')->name('our.service');
Route::resource('state-event', 'StateActivityController');


// Route::get('/contact-us', function () {
//     return view('frontend.contactus');
// });

// Route::get('/about-us', function () {
//     return view('frontend.aboutus');
// });

Auth::routes(['verify'=>true,'register' => false]);
// Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth','verified']], function () {

    

    // Route::get('state/events', 'StateController@events')->name('state.events');
    // Route::get('state/event/create', 'StateController@create_activities')->name('state.create.events');
    // Route::post('state/events', 'StateController@events')->name('state.events');


    Route::group(['prefix' => 'admin'], function () {

        Route::get('home', 'HomeController@index')->name('home');

    Route::get('components', function(){
        return view('components');
    })->name('components');

        Route::resource('users', 'UserController');
        Route::resource('desk', 'DeskController');
        Route::resource('lga', 'LGAController');
        Route::resource('service', 'ServiceController');
        Route::resource('slider', 'SliderController');
        Route::resource('state', 'StateController');
        Route::resource('ward','WardController');
        Route::resource('gallery','GalleryController');
        Route::resource('dnc','DncController');
        Route::resource('zones','ZonesController');
        Route::resource('statecord','StateCordinatorController');
        Route::resource('zone_state','ZoneStateController');
        Route::resource('zonal_state_cord','ZonalStateCordController')->except(['create']);


        Route::post('getLga','LGAController@getLga')->name('getLga');
        Route::post('update-lga','LGAController@updateLga')->name('lga_update');
        Route::post('getWard','WardController@getWard')->name('getWard');
        Route::post('ward_update','WardController@updateWard')->name('ward_update');


        
    Route::resource('roles', 'RoleController')->except('show');

    Route::resource('permissions', 'PermissionController')->except(['show','destroy','update']);

    Route::resource('category', 'CategoryController')->except('show');

    Route::resource('post', 'PostController');

    Route::get('activity-log', 'SettingController@activity')->name('activity-log.index');

    Route::get('settings', 'SettingController@index')->name('settings.index');

    Route::post('settings', 'SettingController@update')->name('settings.update');

    });



    // Route::get('state/{id}/{lga_id}', 'StateController@edit_data')->name('edit.state.data');

    // Route::post('creat-lga', 'StateController@')->name('create.lga');
    
   

 

    Route::get('/profile/{user}', 'UserController@profile')->name('profile.edit');

    Route::post('/profile/{user}', 'UserController@profileUpdate')->name('profile.update');


    Route::get('media', function (){
        return view('media.index');
    })->name('media.index');
});

<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/backend', 'Admin\Dashboard@index');
Route::group(["namespace" => 'Admin', "prefix" => "backend"], function() {
    Route::get('/', ['uses'=> 'Dashboard@index', 'as' => 'admin.index']);
  //  Entrust::routeNeedsRole('backend/acl*', 'admin', Redirect::to('/home'));
    Route::resource('roles', 'RolesController');
    Route::resource('acl', 'UsersController');

    Route::resource('permissions', 'PermissionsController');
    Route::resource('categories', 'CategoryController');
    Route::resource('product', 'ProductsController');
    Route::resource('license','licenseController');
   // Route::resource('product', 'UsersController');
});
/**
 * Front End Routes
 */
Route::group(["namespace" => 'Site'], function() {
    Route::get('/', ['uses'=> 'Dashboard@index', 'as' => 'site.index']);
    Route::get('profile','UsersController@profile');
    Route::post('profile','UsersController@update_avatar');
    Route::get('cat/{id}', 'CategoryController@show');
    Route::resource('product', 'ProductsController');
});
Route::group(["namespace" => 'ClientArea', "prefix" => "client-area"], function() {
    Route::resource('orders', 'Orde  rsController');
});
/*Route::group(["namespace" => 'Admin', "prefix" => "admin",'middleware' => ['role:admin']], function() {
    Route::get('/', ['uses'          => 'Dashboard@index', 'as' => 'admin.index']);
    Route::get('/settings', ['uses'          => 'Dashboard@index', 'as' => 'admin.index']);
});*/
Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('fileentries', 'FileEntryController@index');
Route::get('fileentries/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentries/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);
Route::get('fileentries/getdownload/{filename}', [
    'as' => 'downloadentry', 'uses' => 'FileEntryController@getDownload']);
Route::get('/download', 'HomeController@getDownload');
Route::post('payment/{id}', [
    'as' => 'payment', 'uses' => 'FileEntryController@payment']);


Route::get('/secret', function()
{

    $user = Auth::user();

    if ($user->hasRole('admin'))
    {
        return 'Redheads party the hardest!';
    }

    return 'Many people like to party.';
});

/*
 *
 * Messages
 */
Route::get('/message', 'MessageController@index');
Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');
Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');

Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
   // Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
    Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});


Route::get('/pay', function()
{
   return view('hello');
});
Route::post('/pay1', function()
{

    $token= \Illuminate\Support\Facades\Input::get('stripeToken');
    Auth::user()->charge(100, [
        'source' => $token
    ]);    return "done";
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Frontend\HomeController;

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

Route::group([
    'middleware' => ['web'],
], function () {
    Route::group([
        'namespace' => 'App\Http\Controllers\Auth'
    ], function () {
        Route::get('login', ['as' => SHOW_LOGIN, 'uses' => 'AuthController@login']);
        Route::post('post-login', ['as' => DO_LOGIN, 'uses' => 'AuthController@doLogin']);
        Route::get('logout', ['as' => LOGOUT, 'uses' => 'AuthController@logout']);
    });
});

Route::group([
    'middleware' => ['web'],
], function () {
    Route::group([
        'namespace' => 'App\Http\Controllers\FrontEnd'
    ], function () {
        Route::get('/', ['as' => HOME_PAGE, 'uses' => 'HomeController@index']);
        Route::get('/chi-tiet/{slug}', ['as' => HOME_DETAIL_PAGE, 'uses' => 'HomeController@detail']);
        Route::get('/gioi-thieu', ['as' => HOME_ABOUT_PAGE, 'uses' => 'HomeController@about']);
    });
});

Route::group([
    'namespace' => 'App\Http\Controllers\Products',
    'prefix' => 'admin/product',
    'middleware' => ['auth']
], function () {
    Route::get('/', ['as' => PRODUCT_LIST, 'uses' => 'ProductsController@index']);
    Route::get('/list', ['as' => PRODUCT_LIST, 'uses' => 'ProductsController@index']);
    Route::get('/create', ['as' => PRODUCT_CREATE, 'uses' => 'ProductsController@create']);
    Route::post('/create/post', ['as' => PRODUCT_POST_CREATE, 'uses' => 'ProductsController@postCreate']);
    Route::get('/edit/{slug}', ['as' => PRODUCT_EDIT, 'uses' => 'ProductsController@edit']);
    Route::post('/edit/post', ['as' => PRODUCT_POST_EDIT, 'uses' => 'ProductsController@postEdit']);
    Route::get('/delete/{id}', ['as' => PRODUCT_DELETE, 'uses' => 'ProductsController@delete']);
    Route::post('/api/delete/listid', ['as' => PRODUCT_DELETE_LIST, 'uses' => 'ProductsController@deleteList']);
    Route::post('/ckeditor/image_upload', ['as' => CKEDITOR_UPLOAD, 'uses' => 'ProductsController@ckeditorUpload']);
});

Route::get('/{any?}', function () {
    return abort(404);;
})->where('any', '.+');

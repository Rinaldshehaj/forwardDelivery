<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['admin', 'auth']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');

    /*Country Address routes*/
    Route::get('/admin/c-address/index', 'AddressController@index')->name('country');
    Route::get('/admin/c-address/create', 'AddressController@create')->name('createCountryAddress');
    Route::post('/admin/c-address/store', 'AddressController@store')->name('storeCountryAddress');
    Route::get('/admin/c-address/{id}', 'AddressController@show')->name('CountryAddress');
    Route::get('/admin/c-address/edit/{id}', 'AddressController@edit')->name('editCountryAddress');
    Route::post('/admin/c-address/update/{id}', 'AddressController@update')->name('updateCountryAddress');
    Route::post('/admin/c-address/delete/{id}', 'AddressController@destroy')->name('deleteCountryAddress');

    /*Country routes*/
    Route::get('/admin/country', 'CountriesController@index')->name('countries');
    Route::get('/admin/country/create', 'CountriesController@create')->name('createCountry');
    Route::post('/admin/country/store', 'CountriesController@store')->name('storeCountry');
    Route::post('/admin/country/delete/{id}', 'CountriesController@destroy')->name('deleteCountry');

    /* Shop routes */
    Route::get('/admin/shop/index', 'ShopController@index')->name('shops');
    Route::get('/admin/shop/create', 'ShopController@create')->name('createShops');
    Route::post('/admin/shop/store', 'ShopController@store')->name('storeShops');
    Route::get('/admin/shop/edit/{id}', 'ShopController@edit')->name('editShop');
    Route::post('/admin/shop/update/{id}', 'ShopController@update')->name('updateShop');
    Route::post('/admin/shop/delete/{id}', 'ShopController@destroy')->name('deleteShop');

    /*Carrier Routes*/
    Route::get('/admin/carrier/index', 'CarrierController@index')->name('carriers');
    Route::get('/admin/carrier/create', 'CarrierController@create')->name('createCarriers');
    Route::get('/admin/carrier/store', 'CarrierController@store')->name('storeCarriers');
});
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/shops', 'ShopController@shops')->name('f_shops');

    /*User Address routes*/
    Route::get('/address/create', 'UserAddressController@create')->name('createAddress');
    Route::post('/address/store', 'UserAddressController@store')->name('storeAddress');
    Route::get('/address/{id}', 'UserAddressController@show')->name('address');
    Route::get('/address/edit/{id}', 'UserAddressController@edit')->name('editAddress');
    Route::post('/address/update/{id}', 'UserAddressController@update')->name('updateAddress');

    /* User routes */
    Route::get('/settings', 'UserController@settings')->name('userSettings');

    /*Calculator Routes*/
    Route::get('/calculator', 'CalculatorController@index')->name('calculator');
    Route::post('/calculate', 'CalculatorController@calculate')->name('calculate');
});

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

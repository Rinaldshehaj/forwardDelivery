<?php

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

Route::get('/home', 'HomeController@index')->name('home');

/*User Address routes*/
Route::get('/admin/address/create', 'UserAddressController@create')->name('createAddress');
Route::post('/admin/address/store', 'UserAddressController@store')->name('storeAddress');
Route::get('/admin/address/{id}', 'UserAddressController@show')->name('address');
Route::get('/address/edit/{id}', 'UserAddressController@edit')->name('editAddress');
Route::post('/admin/address/update/{id}', 'UserAddressController@update')->name('updateAddress');

/*Country Address routes*/
Route::get('/admin/c-address/index', 'AddressController@index')->name('country');
Route::get('/admin/c-address/create', 'AddressController@create')->name('createCountryAddress');
Route::post('/admin/c-address/store', 'AddressController@store')->name('storeCountryAddress');
Route::get('/admin/c-address/{id}', 'AddressController@show')->name('CountryAddress');
Route::get('/admin/c-address/edit/{id}', 'AddressController@edit')->name('editCountryAddress');
Route::post('/admin/c-address/update/{id}', 'AddressController@update')->name('updateCountryAddress');

/*Country routes*/
Route::get('/admin/country', 'CountriesController@index')->name('countries');
Route::get('/admin/country/create', 'CountriesController@create')->name('createCountry');
Route::post('/admin/country/store', 'CountriesController@store')->name('storeCountry');

/* User routes */
Route::get('/settings', 'UserController@settings')->name('userSettings');

/* Shop routes */
Route::get('/admin/shop/index', 'ShopController@index')->name('shops');
Route::get('/admin/shop/create', 'ShopController@create')->name('createShops');
Route::post('/admin/shop/store', 'ShopController@store')->name('storeShops');
Route::get('/admin/shop/edit/{id}', 'ShopController@edit')->name('editShop');
Route::post('/admin/shop/update/{id}', 'ShopController@update')->name('updateShop');

/*Calculator Routes*/
Route::get('/calculator', 'CalculatorController@index')->name('calculator');
Route::post('/calculate', 'CalculatorController@calculate')->name('calculate');

/*Carrier Routes*/
Route::get('/admin/carrier/index', 'CarrierController@index')->name('carriers');
Route::get('/admin/carrier/create', 'CarrierController@create')->name('createCarriers');
Route::get('/admin/carrier/store', 'CarrierController@store')->name('storeCarriers');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

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

//Homepage Route
Route::get('/', 'HomepageController@index')->name('homepage');

//CampusTour Route
Route::get('campustour/step1', 'CampusTourStep1Controller@index')->name('campustour.step1');
Route::get('campustour/step2', 'CampusTourStep2Controller@index')->name('campustour.step2');
Route::get('campustour/step2getdate', 'CampusTourStep2Controller@store');
Route::get('campustour/step3', 'CampusTourStep3Controller@index')->name('campustour.step3');
Route::post('campustour/step3savedata', 'CampusTourStep3Controller@store');
Route::get('campustour/step4', 'CampusTourStep4Controller@index')->name('campustour.step4');
Route::post('campustour/step4savedata', 'CampusTourStep4Controller@store');
Route::get('campustour/finish', 'CampusTourFinishController@index')->name('campustour.finish');

// Ambassador Route
Route::get('ambassador/step1', 'AmbassadorStep1Controller@index')->name('ambassador.step1');
Route::get('ambassador/step2', 'AmbassadorStep2Controller@index')->name('ambassador.step2');
Route::get('ambassador/step2getdate', 'AmbassadorStep2Controller@store');
Route::get('ambassador/step3', 'AmbassadorStep3Controller@index')->name('ambassador.step3');
Route::post('ambassador/step3savedata', 'AmbassadorStep3Controller@store');
Route::get('ambassador/step4', 'AmbassadorStep4Controller@index')->name('ambassador.step4');
Route::post('ambassador/step4savedata', 'AmbassadorStep4Controller@store');
Route::get('ambassador/finish', 'AmbassadorFinishController@index')->name('ambassador.finish');

// search
Route::get('search', 'SearchController@index')->name('search');
Route::get('search/campustour', 'SearchController@CampustourSearch')->name('search.campustour');
Route::get('search/ambassador', 'SearchController@AmbassadorSearch')->name('search.ambassador');
Route::post('search/campustour/show', 'SearchController@campustourShow');
Route::get('search/campustour/detail/{uuid}', 'SearchController@campustourDetail')->name('search.campustour.detail');
Route::get('search/campustour/edit/{uuid}', 'SearchController@campustourEdit')->name('search.campustour.edit');
Route::patch('search/campustour/update/{uuid}', 'SearchController@campustourUpdate')->name('search.campustour.update');
Route::get('search/campustour/delete', 'SearchController@campustourDestroy')->name('search.campustour.delete');
Route::post('search/ambassador/show', 'SearchController@ambassadorShow');
Route::get('search/ambassador/detail/{uuid}', 'SearchController@ambassadorDetail')->name('search.ambassador.detail');
Route::get('search/ambassador/edit/{uuid}', 'SearchController@ambassadorEdit')->name('search.ambassador.edit');
Route::patch('search/ambassador/update/{uuid}', 'SearchController@ambassadorUpdate')->name('search.ambassador.update');
Route::get('search/ambassador/delete', 'SearchController@ambassadorDestroy')->name('search.ambassador.delete');



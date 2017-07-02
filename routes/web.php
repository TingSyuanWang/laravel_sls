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

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('index');
Route::get('/dev/kingadmin-v12', 'MainController@index')->name('kingadmin-v12');
Route::get('/charts-d3charts', 'MainController@chartsD3charts')->name('charts-d3charts');
Route::get('/charts-statistics', 'MainController@chartsStatistics')->name('charts-statistics');
Route::get('/charts-statistics-interactive', 'MainController@chartsStatisticsInteractive')->name('charts-statistics-interactive');
Route::get('/charts-statistics-real-time', 'MainController@chartsStatisticsRealTime')->name('charts-statistics-real-time');
Route::get('/components-calendar', 'MainController@componentsCalendar')->name('components-calendar');
Route::get('/components-gallery', 'MainController@componentsGallery')->name('components-gallery');
Route::get('/components-maps', 'MainController@componentsMaps')->name('components-maps');
Route::get('/components-wizard', 'MainController@componentsWizard')->name('components-wizard');
Route::get('/form-bootstrap-elements', 'MainController@formBootstrapElements')->name('form-bootstrap-elements');
Route::get('/form-elements', 'MainController@formElements')->name('form-elements');
Route::get('/form-file-upload', 'MainController@formFileUpload')->name('form-file-upload');
Route::get('/form-inplace-editing', 'MainController@formInplaceEditing')->name('form-inplace-editing');
Route::get('/form-layouts', 'MainController@formLayouts')->name('form-layouts');
Route::get('/form-text-editor', 'MainController@formTextEditor')->name('form-text-editor');
Route::get('/form-validations', 'MainController@formValidations')->name('form-validations');
Route::get('/page-404', 'MainController@page404')->name('page-404');
Route::get('/page-blank', 'MainController@pageBlank')->name('page-blank');
Route::get('/page-inbox', 'MainController@pageInbox')->name('page-inbox');
Route::get('/page-invoice', 'MainController@pageInvoice')->name('page-invoice');
Route::get('/page-knowledgebase', 'MainController@pageKnowledgebase')->name('page-knowledgebase');
Route::get('/page-login', 'MainController@pageLogin')->name('page-login');
Route::get('/page-register', 'MainController@pageRegister')->name('page-register');
Route::get('/tables-dynamic-table', 'MainController@tablesDynamicTable')->name('tables-dynamic-table');
Route::get('/tables-static-table', 'MainController@tablesStaticTable')->name('tables-static-table');
Route::get('/typography', 'MainController@typography')->name('typography');
Route::get('/ui-elements-buttons', 'MainController@uiElementsButtons')->name('ui-elements-buttons');
Route::get('/ui-elements-flash-message', 'MainController@uiElementsFlashMessage')->name('ui-elements-flash-message');
Route::get('/ui-elements-general', 'MainController@uiElementsGeneral')->name('ui-elements-general');
Route::get('/ui-elements-icons', 'MainController@uiElementsIcons')->name('ui-elements-icons');
Route::get('/widgets', 'MainController@widgets')->name('widgets');
Route::get('/page-profile', 'MainController@pageProfile')->name('page-profile');

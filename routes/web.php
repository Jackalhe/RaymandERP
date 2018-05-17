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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
    return view('layouts.test');
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::Group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('AppViews.Main');
    });
    Route::get('/main', function () {
        return view('AppViews.Main');
    });
});

Route::group(['prefix' => 'General', 'namespace' => 'General', 'middleware' => 'auth'], function () {
//////////////////////  OrganizationRole   //////////////////////

    Route::get('/OrganizationRole/category', 'OrganizationRoleController@manageCategory')->name('OrganizationRole.manageCategory');
    Route::post('/OrganizationRole/add-category',['as'=>'add.category','uses'=>'OrganizationRoleController@addCategory']);

    Route::post('/OrganizationRole/create', 'OrganizationRoleController@store')->name('OrganizationRole.store');
    Route::get('/OrganizationRole/access/{id}', 'OrganizationRoleController@access')->name('OrganizationRole.access');
    Route::post('/OrganizationRole/access/{id}', 'OrganizationRoleController@accessupdate')->name('OrganizationRole.accessupdate');
    Route::post('/OrganizationRole', 'OrganizationRoleController@submits')->name('OrganizationRole.submits');
    Route::resource('/OrganizationRole', 'OrganizationRoleController', ['except' => ['store']]);
//////////////////////  UserAccount   //////////////////////
    Route::resource('/UserAccount', 'UserAccountController');
//////////////////////  Fiscalyear   //////////////////////
    Route::post('/Fiscalyear/create', 'FiscalyearController@store')->name('Fiscalyear.store');
    Route::post('/Fiscalyear', 'FiscalyearController@destroy_all')->name('Fiscalyear.destroyall');
    Route::resource('/Fiscalyear', 'FiscalyearController',['except' => ['store']]);
    //////////////////////  SelectionList   //////////////////////
    Route::post('/SelectionList/create', 'SelectionListController@store')->name('SelectionList.store');
    Route::post('/SelectionList', 'SelectionListController@destroy_all')->name('SelectionList.destroyall');
    Route::resource('/SelectionList', 'SelectionListController',['except' => ['store']]);
});

Auth::routes();

//Route::resource('/UserAccount', 'UserAccountController', ['names' =>
//    [
//        'index' => 'UserAccount.index',
//        'create' => 'UserAccount.create',
//        'store' => 'UserAccount.store',
//        'edit' => 'UserAccount.edit',
//        'update' => 'UserAccount.update',
//        'destroy' => 'UserAccount.destroy',
//    ]
//]);
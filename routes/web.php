<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/* Base Routing */
Route::get('/', 'PublicController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* Admin Routing */
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function() {
	Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

	/*Category Routing*/
	Route::get('category/add-category', 'CategoryController@addCategory')->name('add-category');
	Route::post('category/store-category', 'CategoryController@storeCategory')->name('store-category');
	Route::get('category/manage-category', 'CategoryController@manageCategory')->name('manage-category');
	Route::get('category/edit-category/{id}', 'CategoryController@editCategory')->name('edit-category');
	Route::post('category/update-category', 'CategoryController@updateCategory')->name('update-category');
	Route::get('category/publish-category/{id}', 'CategoryController@publishCategory')->name('publish-category');
	Route::get('category/unpublish-category/{id}', 'CategoryController@unPublishCategory')->name('unpublish-category');
	Route::post('category/delete-category/{id}', 'CategoryController@deleteCategory')->name('delete-category');
});




/* Author Routing */
Route::group(['as'=>'author.', 'prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth', 'author']], function() {
	Route::get('dashboard', 'AuthorController@index')->name('dashboard');
});

/* User Routing */
Route::group(['prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth', 'user']], function() {
	Route::get('dashboard', 'UserController@index')->name('user.dashboard');
});

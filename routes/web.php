<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


/*  Auth Routing  */
Auth::routes();

/* Base Routing and Public Routing */
Route::get('/', 'PublicController@index')->name('/');
Route::get('post/{id}/{slug}', 'PublicController@singlePost')->name('single-post');
Route::post('post/post-comment', 'CommentController@commentPost')->middleware('auth')->name('post-comment');

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

	/*  Tag Routing  */
	Route::get('tag/manage-tag', 'TagController@manageTag')->name('manage-tag');
	Route::get('tag/add-tag', 'TagController@addTag')->name('add-tag');
	Route::post('tag/store-tag', 'TagController@storeTag')->name('store-tag');
	Route::get('tag/edit-tag/{id}', 'TagController@editTag')->name('edit-tag');
	Route::post('tag/update-tag', 'TagController@updateTag')->name('update-tag');
	Route::get('tag/publish-tag/{id}', 'TagController@publishTag')->name('publish-tag');
	Route::get('tag/unpublish-tag/{id}', 'TagController@unpublishTag')->name('unpublish-tag');
	Route::post('tag/delete-tag/{id}', 'TagController@deleteTag')->name('delete-tag');

	/*  Posrt Routing  */
	Route::get('post/manage-post', 'PostController@managePost')->name('manage-post');
	Route::get('post/add-post', 'PostController@addPost')->name('add-post');
	Route::post('post/store-post', 'PostController@storePost')->name('store-post');
	Route::get('post/edit-post/{id}', 'PostController@editPost')->name('edit-post');
	Route::post('post/update-post', 'PostController@updatePost')->name('update-post');
	Route::get('post/publish-post/{id}', 'PostController@publishPost')->name('publish-post');
	Route::get('post/unpublish-post/{id}', 'PostController@unpublishPost')->name('unpublish-post');
	Route::post('post/delete-post/{id}', 'PostController@deletePost')->name('delete-post');
	Route::get('post/details-post/{id}', 'PostController@detailsPost')->name('details-post');
	Route::get('post/approve-post/{id}', 'PostController@approvePost')->name('approve-post');




});




/* Author Routing */
Route::group(['as'=>'author.', 'prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth', 'author']], function() {
	Route::get('dashboard', 'AuthorController@index')->name('dashboard');

		/*  Posrt Routing  */
	Route::get('post/manage-post', 'PostController@managePost')->name('manage-post');
	Route::get('post/add-post', 'PostController@addPost')->name('add-post');
	Route::post('post/store-post', 'PostController@storePost')->name('store-post');
	Route::get('post/edit-post/{id}', 'PostController@editPost')->name('edit-post');
	Route::post('post/update-post', 'PostController@updatePost')->name('update-post');
	Route::get('post/publish-post/{id}', 'PostController@publishPost')->name('publish-post');
	Route::get('post/unpublish-post/{id}', 'PostController@unpublishPost')->name('unpublish-post');
	Route::post('post/delete-post/{id}', 'PostController@deletePost')->name('delete-post');
	Route::get('post/details-post/{id}', 'PostController@detailsPost')->name('details-post');

});

/* User Routing */
Route::group(['prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth', 'user']], function() {
	Route::get('dashboard', 'UserController@index')->name('user.dashboard');
});

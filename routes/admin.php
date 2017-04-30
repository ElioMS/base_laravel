<?php 

Route::prefix('admin')->group(function() {
	Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/panel' , '\Ems\AdminEms\controllers\AdminController@show')->name('panel');
	// Route::get('/panel', 'AdminController')->name('admin.panel');
});



Route::group(['prefix' => 'admin', 'namespace' => 'Admin' , 'middleware' => 'auth:admin'] , function() {

	Route::resource('categories' , 'CategoryController');	
	Route::resource('subscriptions' , 'SubscriptionController', ['only' => ['index' , 'destroy']]);
	Route::resource('contacts' , 'ContactController', ['only' => ['index', 'destroy']]);
	



	Route::get('/export-contacts' , 'SubscriptionController@export')->name('admin.export.contacts');
	///////////////////////////////////


	Route::resource('subcategories' , 'SubcategoryController');
	Route::resource('products' , 'ProductController');






});


<?php 

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'] , function() {
	Route::resource('categories' , 'CategoryController');

	Route::get('/export-contacts' , 'SubscriptionController@export')->name('admin.export.contacts');
	Route::resource('subscriptions' , 'SubscriptionController', ['only' => ['index']]);
});


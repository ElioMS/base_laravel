<?php 

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'] , function() {
	Route::resource('categories' , 'CategoryController');	
	Route::resource('subscriptions' , 'SubscriptionController', ['only' => ['index']]
	);
});


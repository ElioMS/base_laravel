<?php 

Route::group(['prefix' => 'admin'] , function() {
	Route::resource('categories' , 'Admin\CategoryController');	
});


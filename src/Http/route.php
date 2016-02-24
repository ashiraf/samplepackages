<?php
	Route::get('ashiraf/test', array(
		"uses" => 'ashiraf\news\Http\NewsController@test_index',
		 "as" => "ashiraf/test"
	));
	Route::get('list', function(){
		return view('news::home');
	});
	Route::get('another','ashiraf\news\Http\NewsController@test_index');
	Route::get('ashiraf/newslist','ashiraf\news\Http\NewsController@index');

?>
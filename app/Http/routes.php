<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'home.index','uses'=>
'HomeController@index']);




Route::get('say/{name?}',['as' =>'hello.index',function($name = 'Everbody'){
return'Hello,'.$name;
}]);

Route::get('dashboard',function(){
		return'dashboard';
});
Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',function(){
		return'admin dashboard';
	});

});
